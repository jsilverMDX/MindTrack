<?php
class CommentRepliesController extends AppController {

	var $name = 'CommentReplies';

	function index() {
	  $this->layout = 'admin';
		$this->CommentReply->recursive = 0;
		$this->set('commentReplies', $this->paginate());
	}

	function view($id = null) {
	  $this->layout = 'admin';
		if (!$id) {
			$this->Session->setFlash(__('Invalid comment reply', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('commentReply', $this->CommentReply->read(null, $id));
	}

	function add() {
	  $this->layout = 'admin';
		if (!empty($this->data)) {
			$this->CommentReply->create();
			if ($this->CommentReply->save($this->data)) {
				$this->Session->setFlash(__('The comment reply has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment reply could not be saved. Please, try again.', true));
			}
		}
		$ticketComments = $this->CommentReply->TicketComment->find('list');
		$users = $this->CommentReply->User->find('list');
		$this->set(compact('ticketComments', 'users'));
	}

	function edit($id = null) {
	  $this->layout = 'admin';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid comment reply', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CommentReply->save($this->data)) {
				$this->Session->setFlash(__('The comment reply has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment reply could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CommentReply->read(null, $id);
		}
		$ticketComments = $this->CommentReply->TicketComment->find('list');
		$users = $this->CommentReply->User->find('list');
		$this->set(compact('ticketComments', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for comment reply', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CommentReply->delete($id)) {
			$this->Session->setFlash(__('Comment reply deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Comment reply was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
