<?php
class ClientsController extends AppController {

	var $name = 'Clients';
  var $layout = 'mindtrack_client';
  var $helpers = array('Form', 'Html', 'Time');
  var $uses = array('Client', 'User', 'Image', 'Project', 'StatusMessage', 'Ticket', 'TicketComment', 'CommentReply');
  var $components = array('Upload.Upload');
  
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
    $this->Ticket->read(null, $id);
    $this->Ticket->set('status', 'done');
    $this->Ticket->save();
    $this->redirect('/mdx_clients');
	}
	
	function mark_as_not_done($id = null) {
    $this->Ticket->read(null, $id);
    $this->Ticket->set('status', 'not done');
    $this->Ticket->save();
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
			if ($this->Image->save($this->data)) {
				$this->Session->setFlash(__('The image has been saved', true));
			} else {
				$this->Session->setFlash(__('The image could not be saved. Please, try again.', true));
			}
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
		if (!empty($this->data)) {
			$this->Ticket->create();
			if ($this->Ticket->save($this->data)) {
				$this->Session->setFlash('The ticket has been saved');
			} else {
				$this->Session->setFlash('The ticket could not be saved. Please, try again.');
			}
		}
		$this->redirect('/mdx_clients');
	}

	function post_status_message() {
		if (!empty($this->data)) {
			$this->StatusMessage->create();
			if ($this->StatusMessage->save($this->data)) {
				$this->Session->setFlash(__('The status message has been saved', true));
			} else {
				$this->Session->setFlash(__('The status message could not be saved. Please, try again.', true));
			}
		}
		$this->redirect('/mdx_clients');
	}

	function add_comment() {
		if (!empty($this->data)) {
			$this->TicketComment->create();
			if ($this->TicketComment->save($this->data)) {
				$this->Session->setFlash('The comment was created.');
			} else {
				$this->Session->setFlash('The comment could not be created.');
			}
		}
		$this->redirect('/mdx_clients');
	}
	
	// posts a CommentReply
	function reply_to_comment() {
		if (!empty($this->data)) {
			$this->CommentReply->create();
			if ($this->CommentReply->save($this->data)) {
				$this->Session->setFlash(__('The comment reply has been saved', true));
			} else {
				$this->Session->setFlash(__('The comment reply could not be saved. Please, try again.', true));
			}
		}
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
