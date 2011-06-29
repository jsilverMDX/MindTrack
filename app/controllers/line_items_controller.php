<?php
class LineItemsController extends AppController {

	var $name = 'LineItems';
	var $layout = 'admin';

	function index() {
		$this->LineItem->recursive = 0;
		$this->set('lineItems', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid line item', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('lineItem', $this->LineItem->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->LineItem->create();
			if ($this->LineItem->save($this->data)) {
				$this->Session->setFlash(__('The line item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The line item could not be saved. Please, try again.', true));
			}
		}
		$invoices = $this->LineItem->Invoice->find('list');
		$this->set(compact('invoices'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid line item', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->LineItem->save($this->data)) {
				$this->Session->setFlash(__('The line item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The line item could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->LineItem->read(null, $id);
		}
		$invoices = $this->LineItem->Invoice->find('list');
		$this->set(compact('invoices'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for line item', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->LineItem->delete($id)) {
			$this->Session->setFlash(__('Line item deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Line item was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
