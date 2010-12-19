<?php
class StatusMessagesController extends AppController {

	var $name = 'StatusMessages';

	function index() {
		$this->StatusMessage->recursive = 0;
		$this->set('statusMessages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid status message', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('statusMessage', $this->StatusMessage->read(null, $id));
	}

	function add() {
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
		$members = $this->StatusMessage->Member->find('list');
		$this->set(compact('projects', 'members'));
	}

	function edit($id = null) {
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
		$members = $this->StatusMessage->Member->find('list');
		$this->set(compact('projects', 'members'));
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