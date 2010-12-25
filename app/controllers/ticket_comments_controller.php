<?php
class TicketCommentsController extends AppController {

	var $name = 'TicketComments';

	function index() {
	  $this->layout = 'admin';
		$this->TicketComment->recursive = 0;
		$this->set('ticketComments', $this->paginate());
	}

	function view($id = null) {
	  $this->layout = 'admin';
		if (!$id) {
			$this->Session->setFlash(__('Invalid ticket comment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ticketComment', $this->TicketComment->read(null, $id));
	}

	function add() {
	  $this->layout = 'admin';
		if (!empty($this->data)) {
			$this->TicketComment->create();
			if ($this->TicketComment->save($this->data)) {
				$this->Session->setFlash(__('The ticket comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket comment could not be saved. Please, try again.', true));
			}
		}
		$users = $this->TicketComment->User->find('list');
		$tickets = $this->TicketComment->Ticket->find('list');
		$this->set(compact('users', 'tickets'));
	}

	function edit($id = null) {
	  $this->layout = 'admin';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ticket comment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TicketComment->save($this->data)) {
				$this->Session->setFlash(__('The ticket comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket comment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TicketComment->read(null, $id);
		}
		$users = $this->TicketComment->User->find('list');
		$tickets = $this->TicketComment->Ticket->find('list');
		$this->set(compact('users', 'tickets'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ticket comment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TicketComment->delete($id)) {
			$this->Session->setFlash(__('Ticket comment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ticket comment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
