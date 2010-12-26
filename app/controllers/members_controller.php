<?php
class MembersController extends AppController {

	var $name = 'Members';
	var $uses = array('Member', 'User', 'Image', 'Project', 'StatusMessage', 'Ticket', 'TicketComment', 'CommentReply');
	var $components = array('Upload.Upload');
	var $layout = 'mindtrack';
	
	// member landing point
	function member_landing() {
    $this->set("title_for_layout", "MDX MindTrack | Dashboard");
	  $session_user = $this->Session->read('Auth.User');
    $this->set("user_id", $session_user['id']);
	  $options['conditions'] = array('Member.user_id =' => $session_user['id']);
	  $options['contain'] = array('Project' => array('StatusMessage' => array('User'), 'User' => array('Client'), 'Ticket' => array('Image', 'TicketComment' => array('User', 'CommentReply' => array('User')))));
    $member = $this->Member->find('first', $options);
	  $this->set("member", $member);
	}
	
	
	
	// action that assigns tickets
	// show all unassigned & assigned tickets
	function ticket_master() {
    $this->set("title_for_layout", "MDX MindTrack | Ticket Master");

	}
	
	// i just need to know which pipe to smoke the crack out of
	function done_tickets() {
    $this->set("title_for_layout", "MDX MindTrack | Done Tickets");
	  $session_user = $this->Session->read('Auth.User');
    $this->set("user_id", $session_user['id']);
	  $options['conditions'] = array('Member.user_id =' => $session_user['id']);
	  $options['contain'] = array('Project' => array('StatusMessage' => array('User'), 'User' => array('Client'), 'Ticket' => array('conditions' => array('status =' => 'done'), 'Image', 'TicketComment' => array('User', 'CommentReply' => array('User')))));
    $member = $this->Member->find('first', $options);
	  $this->set("member", $member);
	}
	
	function mark_as_done($id = null) {
    $this->Ticket->read(null, $id);
    $this->Ticket->set('status', 'done');
    $this->Ticket->save();
    $this->redirect('/mdx_members');
	}
	
	function mark_as_not_done($id = null) {
    $this->Ticket->read(null, $id);
    $this->Ticket->set('status', 'not done');
    $this->Ticket->save();
    $this->redirect('/mdx_members');
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
		$this->redirect('/mdx_members');
	}
	
	// post a Comment
	function add_comment() {
		if (!empty($this->data)) {
			$this->TicketComment->create();
			if ($this->TicketComment->save($this->data)) {
				$this->Session->setFlash(__('The comment reply has been saved', true));
			} else {
				$this->Session->setFlash(__('The comment reply could not be saved. Please, try again.', true));
			}
		}
		$this->redirect('/mdx_members');
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
		$this->redirect('/mdx_members');
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
		$this->redirect('/mdx_members');
	}

	function index() {
	  $this->layout = 'admin';
		$this->Member->recursive = 0;
		$this->set('members', $this->paginate());
	}

	function view($id = null) {
	  $this->layout = 'admin';
		if (!$id) {
			$this->Session->setFlash(__('Invalid member', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('member', $this->Member->read(null, $id));
	}

	function add() {
	  $this->layout = 'admin';
		if (!empty($this->data)) {
			$this->Member->create();
			if ($this->Member->save($this->data)) {
				$this->Session->setFlash(__('The member has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Member->User->find('list');
		$projects = $this->Member->Project->find('list');
		$tickets = $this->Member->Ticket->find('list');
		$this->set(compact('users', 'projects', 'tickets'));
	}

	function edit($id = null) {
	  $this->layout = 'admin';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid member', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Member->save($this->data)) {
				$this->Session->setFlash(__('The member has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Member->read(null, $id);
		}
		$users = $this->Member->User->find('list');
		$projects = $this->Member->Project->find('list');
		$tickets = $this->Member->Ticket->find('list');
		$this->set(compact('users', 'projects', 'tickets'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for member', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Member->delete($id)) {
			$this->Session->setFlash(__('Member deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Member was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
