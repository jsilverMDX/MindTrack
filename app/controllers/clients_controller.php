<?php
class ClientsController extends AppController {

	var $name = 'Clients';
  var $layout = 'mindtrack_client';
  var $helpers = array('Form', 'Html');
  var $uses = array('Client', 'Project', 'Ticket', 'TicketComment', 'StatusMessage');

  // client landing point
  function client_landing() {
	  $session_user = $this->Session->read('Auth.User');
	  $options['conditions'] = array('Client.user_id =' => $session_user['id']);
	  $options['contain'] = array('Project' => array('StatusMessage' => array('Member'), 'Ticket' => array('TicketComment' => array('CommentReply'))));
    $client = $this->Client->find('first', $options);
    //debug($client);
    $this->set("title_for_layout", "MindTrack");
	  $this->set("client", $client);
  }


  function new_ticket($id) {
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
		$this->redirect(array('action' => 'client_landing'));
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
		$this->redirect(array('action' => 'client_landing'));
	}


	function edit_my_project($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect(array('action' => 'client_landing'));
		}
		if (!empty($this->data)) {
			if ($this->Project->save($this->data)) {
				$this->Session->setFlash(__('The project has been saved', true));
				$this->redirect(array('action' => 'client_landing'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Project->read(null, $id);
		}
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
