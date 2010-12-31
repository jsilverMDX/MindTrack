<?php
class ClientsController extends AppController {

	var $name = 'Clients';
  var $layout = 'mindtrack_client';
  var $helpers = array('Form', 'Html', 'Time', 'Textile');
  var $uses = array('Client', 'User', 'Image', 'Project', 'StatusMessage', 'Ticket', 'TicketComment', 'CommentReply');

  
  // client landing point
  function client_landing() {
	  $session_user = $this->Session->read('Auth.User');
	  $options['conditions'] = array('User.id =' => $session_user['id']);
	  $options['contain'] = array('Client', 'Project' => array('StatusMessage' => array('User'), 'Ticket' => array('Image', 'TicketComment' => array('User', 'CommentReply' => array('User')))));
    $user = $this->User->find('first', $options);
    //debug($user);
    $this->set("title_for_layout", "MDX MindTrack");
    $this->set("user_id", $session_user['id']);
    $this->set("client", $user['Client']);
	  $this->set("user", $user);
  }
  
  function show_ticket($id = null) {
    $session_user = $this->Session->read('Auth.User');
    $options['conditions'] = array('Ticket.id' => $id);
    $options['contain'] = array('Image', 'TicketComment' => array('User', 'CommentReply' => array('User')));
    $ticket = $this->Ticket->find('first', $options);
    $this->set('ticket', $ticket);
    $this->set("user_id", $session_user['id']);
    //debug($ticket);
  }
  
  function edit_ticket($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ticket', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			  $this->Ticket->save($this->data);
				$this->redirect('/mdx_clients');
		}
		if (empty($this->data)) {
			$this->data = $this->Ticket->read(null, $id);
		}
		$projects = $this->Ticket->Project->find('list');
		$users = $this->Ticket->User->find('list');
		$this->set(compact('projects', 'users'));
  }
  
  // a completed tickets view.. so client can mark undone
  function done_tickets() {
	  $session_user = $this->Session->read('Auth.User');
	  $options['conditions'] = array('User.id =' => $session_user['id']);
	  $options['contain'] = array('Client', 'Project' => array('StatusMessage' => array('User'), 'Ticket' => array('conditions' => array('Ticket.status =' => 'done'), 'Image', 'TicketComment' => array('User', 'CommentReply' => array('User')))));
    $user = $this->User->find('first', $options);
    //debug($user);
    $this->set("title_for_layout", "MDX MindTrack | Done Tickets");
    $this->set("user_id", $session_user['id']);
    $this->set("client", $user['Client']);
	  $this->set("user", $user);
  }
	
	function mark_as_done($id = null) {
    $ticket = $this->Ticket->read(null, $id);
    $this->Ticket->set('status', 'done');
    $this->Ticket->save();
    $this->_ticket_done_email($ticket);
    $this->redirect('/mdx_clients');
	}

	function _ticket_done_email($ticket) {
	
	  // set variables
	  $session_user = $this->Session->read('Auth.User');
    $this->set('completer', $session_user['username']);
	  $ticket_name =  $ticket['Ticket']['id'] . ': ' . $ticket['Ticket']['name'];
	  $this->set('ticket_name', $ticket_name);
	 
		$options['contain'] = array('Member' => 'User');
		$options['conditions'] = array('Ticket.id =' => $ticket['Ticket']['id']);
		$ticket = $this->Ticket->find('first', $options);	
	  
	  $this->_mailUsers($ticket['Member'], $ticket_name . ": Marked as done", 'ticket_done');
	}	
	
	function mark_as_not_done($id = null) {
    $ticket = $this->Ticket->read(null, $id);
    $this->Ticket->set('status', 'not done');
    $this->Ticket->save();
    $this->_ticket_undone_email($ticket);
    $this->redirect('/mdx_clients');
	}
	
	function _ticket_undone_email($ticket) {
	  // set variables
    $session_user = $this->Session->read('Auth.User');
    $this->set('reopener', $session_user['username']);
	  $ticket_name =  $ticket['Ticket']['id'] . ': ' . $ticket['Ticket']['name'];
	  $this->set('ticket_name', $ticket_name);
	 
		$options['contain'] = array('Member' => 'User');
		$options['conditions'] = array('Ticket.id =' => $ticket['Ticket']['id']);
		$ticket = $this->Ticket->find('first', $options);	
	  
	  $this->_mailUsers($ticket['Member'], $ticket_name . ": Marked as not done", 'ticket_undone');
	}	
	
	function add_file_to_ticket() {
		if (!empty($this->data)) {
		  // hello hacky
		  $url = $this->Upload->put($this->data['Image']['name'], 'mindynamics.com');
		  $this->data['Image']['s3_url'] = $url;
		  $file_name = $this->data['Image']['name']['name'];
		  $this->data['Image']['name'] = $file_name; // remove PHP upload array object
			$this->Image->create();
			$this->Image->save($this->data);
			$image = $this->Image->read();
			$this->_add_file_email($image);
		}
		$this->redirect('/mdx_clients');
	}
	
	function _add_file_email($image) {
	  // set variables
    $session_user = $this->Session->read('Auth.User');
    $uploader = $session_user['username'];
    $this->set('uploader', $uploader);
	  $ticket_name =  $image['Ticket'][0]['id'] . ': ' . $image['Ticket'][0]['name'];
	  $this->set('ticket_name', $ticket_name);
	  $s3_url = "http://s3.amazonaws.com".$image['Image']['s3_url'];
	  $this->set('s3_url', $s3_url);
	 
		$options['contain'] = array('Member' => 'User');
		$options['conditions'] = array('Ticket.id =' => $image['Ticket'][0]['id']);
		$ticket = $this->Ticket->find('first', $options);	
	  
	  $this->_mailUsers($ticket['Member'], $uploader . " uploaded a file to " . $ticket_name, 'uploaded_file');
	}	

  function new_ticket($id = null) {
    $session_user = $this->Session->read('Auth.User');
    $this->set("user_id", $session_user['id']);
    $this->set("project_id", $id);
    $this->set("title_for_layout", "MindTrack | New Ticket");
  }

	function add_ticket() {
  	$this->Ticket->create();
  	$this->Ticket->save($this->data);
    $ticket = $this->Ticket->read();
    $this->_add_ticket_email($ticket);
		$this->redirect('/mdx_clients');
	}
	
	function _add_ticket_email($ticket) {
	  // set variables
	  $this->set('author', $ticket['User']['username']);
	  $ticket_name = $ticket['Ticket']['name'];
	  $this->set('ticket_name', $ticket_name);
	  $this->set('description', $ticket['Ticket']['description']);
	  $this->set('timestamps', $ticket['Ticket']['created']);
	 
		$options['contain'] = array('Member' => 'User');
		$options['conditions'] = array('Project.id =' => $ticket['Ticket']['project_id']);
		$project = $this->Project->find('first', $options);
		$project_name = $project['Project']['name'];
	  $this->set('project_name', $project_name);

	  $this->_mailUsers($project['Member'], 'New Ticket on ' . $project_name . ": " . $ticket_name, 'new_ticket');
	}	

	function post_status_message() {
		$this->StatusMessage->create();
		$this->StatusMessage->save($this->data);
		$status_message = $this->StatusMessage->read();
		$this->_status_message_email($status_message);
		$this->redirect('/mdx_clients');
	}

	function _status_message_email($status_message) {
	  // set variables
	  $this->set('author', $status_message['User']['username']);
	  $this->set('message', $status_message['StatusMessage']['message']);
	  $this->set('timestamps', $status_message['StatusMessage']['created']);
	 
		$options['contain'] = array('Member' => 'User');
		$options['conditions'] = array('Project.id =' => $status_message['StatusMessage']['project_id']);
		$project = $this->Project->find('first', $options);
		$project_name = $status_message['Project']['name'];
	  $this->set('project_name', $project_name);

	  $this->_mailUsers($project['Member'], $project_name . ": New Status Message", 'status_message');
	}	

	function add_comment() {
	  // make the fuggen comment
		$this->TicketComment->create();
		$this->TicketComment->save($this->data);
		// email us
		$ticket_comment = $this->TicketComment->read();
    $this->_add_comment_email($ticket_comment);
		$this->redirect('/mdx_clients');
	}
	
	//works
	function _add_comment_email($ticket_comment) {
	  // set variables
	  $this->set('author', $ticket_comment['User']['username']);
	  $this->set('comment', $ticket_comment['TicketComment']['comment']);
	  $ticket_name =  $ticket_comment['Ticket']['id'] . ': ' . $ticket_comment['Ticket']['name'];
	  $this->set('ticket_name', $ticket_name);
	  $this->set('timestamps', $ticket_comment['TicketComment']['created']);
	 
		$options['contain'] = array('Member' => 'User');
		$options['conditions'] = array('Ticket.id =' => $ticket_comment['TicketComment']['ticket_id']);
		$ticket = $this->Ticket->find('first', $options);	
	  
	  $this->_mailUsers($ticket['Member'], $ticket_name . ": Comment Posted", 'comment_posted');
	}
	
	// posts a CommentReply
	function reply_to_comment() {
		$this->CommentReply->create();
		$this->CommentReply->save($this->data);
		$comment_reply = $this->CommentReply->read();
		$this->_reply_comment_email($comment_reply);
		$this->redirect('/mdx_clients');
	}

	//works
	function _reply_comment_email($comment_reply) {
	  // set variables
	  //debug($comment_reply);
	  $this->set('author', $comment_reply['User']['username']);
	  $this->set('reply', $comment_reply['CommentReply']['reply']);
	  $this->set('timestamps', $comment_reply['CommentReply']['created']);
	 
		$options['contain'] = array('Member' => 'User');
		$options['conditions'] = array('Ticket.id =' => $comment_reply['TicketComment']['ticket_id']);
		$ticket = $this->Ticket->find('first', $options);	
		$ticket_name = $ticket['Ticket']['id'] . ': ' . $ticket['Ticket']['name'];
	  $this->set('ticket_name', $ticket_name);
	  
	  $this->_mailUsers($ticket['Member'], $ticket_name . ": Reply Posted", 'comment_reply');
	}
	
	
	function edit_my_project($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect('/mdx_clients');
		}
		if (!empty($this->data)) {
			if ($this->Project->save($this->data)) {
				$this->Session->setFlash(__('The project has been saved', true));
				$this->redirect('/mdx_clients');
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Project->read(null, $id);
		}
		// set $user_id
    $session_user = $this->Session->read('Auth.User');
    $this->set("user_id", $session_user['id']);
	}
	
	

	function index() {
	  $this->layout = 'admin';
		$this->Client->recursive = 0;
		$this->set('clients', $this->paginate());
	}

	function view($id = null) {
	  $this->layout = 'admin';
		if (!$id) {
			$this->Session->setFlash(__('Invalid client', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('client', $this->Client->read(null, $id));
	}

	function add() {
	  $this->layout = 'admin';
		if (!empty($this->data)) {
			$this->Client->create();
			if ($this->Client->save($this->data)) {
				$this->Session->setFlash(__('The client has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Client->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
	  $this->layout = 'admin';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid client', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Client->save($this->data)) {
				$this->Session->setFlash(__('The client has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Client->read(null, $id);
		}
		$users = $this->Client->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for client', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Client->delete($id)) {
			$this->Session->setFlash(__('Client deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Client was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
