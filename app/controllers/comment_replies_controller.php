<?php
class CommentRepliesController extends AppController {

	var $name = 'CommentReplies';

	function index() {
		$this->CommentReply->recursive = 0;
		$this->set('commentReplies', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid comment reply', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('commentReply', $this->CommentReply->read(null, $id));
	}

	function add() {
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
		$members = $this->CommentReply->Member->find('list');
		$this->set(compact('ticketComments', 'members'));
	}

	function edit($id = null) {
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
		$members = $this->CommentReply->Member->find('list');
		$this->set(compact('ticketComments', 'members'));
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