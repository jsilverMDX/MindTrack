<?php
class StatusMessagesController extends AppController {

	var $name = 'StatusMessages';

	function index() {
	  $this->layout = 'admin';
		$this->StatusMessage->recursive = 0;
		$this->set('statusMessages', $this->paginate());
	}

	function view($id = null) {
	  $this->layout = 'admin';
		if (!$id) {
			$this->Session->setFlash(__('Invalid status message', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('statusMessage', $this->StatusMessage->read(null, $id));
	}

	function add() {
	  $this->layout = 'admin';
		if (!empty($this->data)) {
			$this->StatusMessage->create();
			if ($this->StatusMessage->save($this->data)) {
				$this->Session->setFlash(__('The status message has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status message could not be saved. Please, try again.', true));
			}
		}
		$projects = $this->StatusMessage->Project->find('list');
		$users = $this->StatusMessage->User->find('list');
		$this->set(compact('projects', 'users'));
	}

	function edit($id = null) {
	  $this->layout = 'admin';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid status message', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->StatusMessage->save($this->data)) {
				$this->Session->setFlash(__('The status message has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status message could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->StatusMessage->read(null, $id);
		}
		$projects = $this->StatusMessage->Project->find('list');
		$users = $this->StatusMessage->User->find('list');
		$this->set(compact('projects', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for status message', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->StatusMessage->delete($id)) {
			$this->Session->setFlash(__('Status message deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Status message was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
