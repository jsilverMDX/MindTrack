<?php
class TimeEntriesController extends AppController {

	var $name = 'TimeEntries';
	var $layout = 'admin';

	function index() {
		$this->TimeEntry->recursive = 0;
		$this->set('timeEntries', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid time entry', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('timeEntry', $this->TimeEntry->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TimeEntry->create();
			if ($this->TimeEntry->save($this->data)) {
				$this->Session->setFlash(__('The time entry has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time entry could not be saved. Please, try again.', true));
			}
		}
		$projects = $this->TimeEntry->Project->find('list');
		$this->set(compact('projects'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid time entry', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TimeEntry->save($this->data)) {
				$this->Session->setFlash(__('The time entry has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time entry could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TimeEntry->read(null, $id);
		}
		$projects = $this->TimeEntry->Project->find('list');
		$this->set(compact('projects'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for time entry', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TimeEntry->delete($id)) {
			$this->Session->setFlash(__('Time entry deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Time entry was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
