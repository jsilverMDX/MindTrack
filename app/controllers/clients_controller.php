<?php
class ClientsController extends AppController {

	var $name = 'Clients';
  var $layout = 'mindtrack_client';
  var $helpers = array('Form', 'Html', 'Time', 'Textile');
  var $uses = array('Client', 'User', 'Invoice', 'LineItem', 'Image', 'Project', 'StatusMessage', 'Ticket', 'TicketComment', 'CommentReply');

  
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
  
  // per-project files
  // images_projects join table
  // ability to post a file to a project here
  function doc_store() {
  $session_user = $this->Session->read('Auth.User');
  $options['conditions'] = array('User.id =' => $session_user['id']);
  $this->set("user_id", $session_user['id']);
  $options['contain'] = array('Project' => 'Image');
  $user = $this->User->find('first', $options);
  $this->set('projects', $user['Project']);
  }
  
  function add_file_to_project() {
		if (!empty($this->data)) {
		  // hello hacky
		  $url = $this->Upload->put($this->data['Image']['name'], 'mindynamics.com');
		  $this->data['Image']['s3_url'] = $url;
		  $file_name = $this->data['Image']['name']['name'];
		  $this->data['Image']['name'] = $file_name; // remove PHP upload array object
			$this->Image->create();
			$this->Image->save($this->data);
			$image = $this->Image->read();
			$this->_add_proj_file_email($image);
		}
		$this->redirect('/clients/doc_store');
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


	function mark_as_not_done($id = null) {
    $ticket = $this->Ticket->read(null, $id);
    $this->Ticket->set('status', 'not done');
    $this->Ticket->save();
    $this->_ticket_undone_email($ticket);
    $this->redirect('/mdx_clients');
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
	


  function new_ticket($id = null) {
    $session_user = $this->Session->read('Auth.User');
    $this->set("user_id", $session_user['id']);
    $this->set("project_id", $id);
    $this->set("title_for_layout", "MindTrack | New Ticket");
  }

	function add_ticket() {
	  $this_data = $this->data;
	  $last_ticket = $this->Ticket->find('first', array('order' => array('Ticket.id DESC')));
	  $ticket_num = $last_ticket['Ticket']['num'] + 1;
	  $this_data['Ticket']['num'] = $ticket_num;
  	$this->Ticket->create();
  	$this->Ticket->save($this_data);
    $ticket = $this->Ticket->read();
    $this->_add_ticket_email($ticket);
		$this->redirect('/mdx_clients');
	}
	

	function post_status_message() {
		$this->StatusMessage->create();
		$this->StatusMessage->save($this->data);
		$status_message = $this->StatusMessage->read();
		$this->_status_message_email($status_message);
		$this->redirect('/mdx_clients');
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
	

	// posts a CommentReply
	function reply_to_comment() {
		$this->CommentReply->create();
		$this->CommentReply->save($this->data);
		$comment_reply = $this->CommentReply->read();
		$this->_reply_comment_email($comment_reply);
		$this->redirect('/mdx_clients');
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
	
	// show me my invoices so i can pay them
	function my_invoices() {
    $session_user = $this->Session->read('Auth.User');
    $user_id = $session_user['id'];
    $client = $this->Client->find('first', array('conditions' =>array('Client.user_id =' => $user_id)));
    $options['conditions'] = array('Invoice.client_id =' => $client['Client']['id']);
    $options['contain'] = array('Client', 'LineItem', 'Project');
    $invoices = $this->Invoice->find('all', $options);
    $this->set("invoices", $invoices);
    $this->set("user_id", $user_id);	
	
	}
	
	
	
	
	/* ADMIN */

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
