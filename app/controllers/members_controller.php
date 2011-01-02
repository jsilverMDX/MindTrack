<?php
class MembersController extends AppController {

	var $name = 'Members';
	var $uses = array('Member', 'TimeEntry', 'User', 'Image', 'Project', 'StatusMessage', 'Ticket', 'TicketComment', 'CommentReply');
	var $layout = 'mindtrack';
	var $helpers = array('Html', 'Form', 'Time', 'Textile');
	
	// member landing point
	// shows all incomplete tickets for my projects
	function member_landing() {
    $this->set("title_for_layout", "MDX MindTrack | Dashboard");
	  $session_user = $this->Session->read('Auth.User');
    $this->set("user_id", $session_user['id']);
	  $options['conditions'] = array('Member.user_id =' => $session_user['id']);
	  $options['contain'] = array('Project' => array('StatusMessage' => array('User'), 'User' => array('Client'), 'Ticket' => array('Image', 'TicketComment' => array('User', 'CommentReply' => array('User')))));
    $member = $this->Member->find('first', $options);
	  $this->set("member", $member);
	}
	
	// show a javascript timeclock that posts time entries
	// probably just gonna time % 60 (mod) to get the mult
	// and store it with a "billed" boolean... we can 
	// enter rate else where of course.
	function track_time() {
    $this->set("title_for_layout", "MDX MindTrack | Track Time");
	  $session_user = $this->Session->read('Auth.User');
    $this->set("user_id", $session_user['id']);
	  $options['conditions'] = array('Member.user_id =' => $session_user['id']);
	  $options['contain'] = array('Project' => 'TimeEntry');
    $member = $this->Member->find('first', $options);
	  $this->set("member", $member);
	  $projects = $this->Member->Project->find('list');
	  $this->set('projects', $projects);
	}
	
	function punch_timeclock() {
		$this->TimeEntry->create();
		$this->TimeEntry->save($this->data);
		$this->redirect('/members/track_time');
	}
	
  // per-project files
  // images_projects join table
  // ability to post a file to a project here
  function doc_store() {
  $session_user = $this->Session->read('Auth.User');
  $options['conditions'] = array('User.id =' => $session_user['id']);
  $this->set("user_id", $session_user['id']);
  $options['contain'] = array('Member' => array('Project' => 'Image'));
  $user = $this->User->find('first', $options);
  $this->set('projects', $user['Member']['Project']);
  }
  
  function add_file_to_project() {
		if (!empty($this->data)) {
		  // hello hacky
		  $url = $this->Upload->put($this->data['Image']['name'], 'mindynamics.com');
		  $this->data['Image']['s3_url'] = $url;
		  $file_name = $this->data['Image']['name']['name'];
		  $this->data['Image']['name'] = $file_name; // remove PHP upload array object
			$this->Image->create();
			$this->Image->save($this->data);
			$image = $this->Image->read();
			$this->_add_proj_file_email($image);
		}
		$this->redirect('/members/doc_store');
  }

	function _add_proj_file_email($image) {
	  // set variables
    $session_user = $this->Session->read('Auth.User');
    $uploader = $session_user['username'];
    $this->set('uploader', $uploader);
	  $project_name =  $image['Project'][0]['name'];
	  $this->set('project_name', $project_name);
	  $s3_url = "http://s3.amazonaws.com".$image['Image']['s3_url'];
	  $this->set('s3_url', $s3_url);
	 
		$options['contain'] = array('User');
		$options['conditions'] = array('Project.id =' => $image['Project'][0]['id']);
		$project = $this->Project->find('first', $options);	
	  
	  $this->_mailUser($project, $uploader . " uploaded a file to " . $project_name, 'uploaded_file_proj');
	}	
	
	// shows only my tickets
	function my_tickets() {
    $this->set("title_for_layout", "MDX MindTrack | Dashboard");
	  $session_user = $this->Session->read('Auth.User');
    $this->set("user_id", $session_user['id']);
	  $options['conditions'] = array('Member.user_id =' => $session_user['id']);
	  $options['contain'] = array('Ticket' => array('conditions' => array('Ticket.status !=' => 'done'), 'Project', 'Image', 'TicketComment' => array('User', 'CommentReply' => array('User'))));
    $member = $this->Member->find('first', $options);
    //debug($member);
	  $this->set("member", $member);
	}
	
	// works lovely
	function assign_ticket($id = null) {
  $this->Ticket->save($this->data);
	$this->redirect('/members/ticket_master');
	}

	// action that assigns tickets
	// show all unassigned & assigned tickets
	function ticket_master() {
    $this->set("title_for_layout", "MDX MindTrack | Ticket Master");
    $options['contain'] = array('Members');
    $tickets = $this->Ticket->find('all');
    $members = $this->Member->find('list');
    $this->set('members', $members);
    $this->set('tickets', $tickets);
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
	
	
	// +1 associated members
	function mark_as_done($id = null) {
    $ticket = $this->Ticket->read(null, $id);
    $this->Ticket->set('status', 'done');
    $this->Ticket->save();
    // get completer
    $session_user = $this->Session->read('Auth.User');
    $this->set('completer', $session_user['username']);
    $this->_ticket_done_email($ticket);
    $this->redirect('/mdx_members');
	}
	
	function _ticket_done_email($ticket) {
	  // set variables
	  $ticket_name =  $ticket['Ticket']['id'] . ': ' . $ticket['Ticket']['name'];
	  $this->set('ticket_name', $ticket_name);
	 
		$options['contain'] = array('User');
		$options['conditions'] = array('Ticket.id =' => $ticket['Ticket']['id']);
		$ticket = $this->Ticket->find('first', $options);	
	  
	  $this->_mailUser($ticket, $ticket_name . ": Marked as done", 'ticket_done');
	}	
	
	// -1 associated members
	function mark_as_not_done($id = null) {
    $ticket = $this->Ticket->read(null, $id);
    $this->Ticket->set('status', 'not done');
    $this->Ticket->save();
    $session_user = $this->Session->read('Auth.User');
    $this->set('reopener', $session_user['username']);
    $this->_ticket_undone_email($ticket);
    $this->redirect('/mdx_members');
	}
	
	function _ticket_undone_email($ticket) {
	  // set variables
	  $ticket_name =  $ticket['Ticket']['id'] . ': ' . $ticket['Ticket']['name'];
	  $this->set('ticket_name', $ticket_name);
	 
		$options['contain'] = array('User');
		$options['conditions'] = array('Ticket.id =' => $ticket['Ticket']['id']);
		$ticket = $this->Ticket->find('first', $options);	
	  
	  $this->_mailUser($ticket, $ticket_name . ": Marked as not done", 'ticket_undone');
	}	
	
	function add_file_to_ticket() {
		if (!empty($this->data)) {
		  // hello hacky
		  $url = $this->Upload->put($this->data['Image']['name'], 'mindynamics.com');
		  $this->data['Image']['s3_url'] = $url;
		  $file_name = $this->data['Image']['name']['name'];
		  $this->data['Image']['name'] = $file_name; // remove PHP upload array object
			$this->Image->create();
			$this->Image->save($this->data);
			$image = $this->Image->read();
			$this->_add_file_email($image);
		}
		$this->redirect('/mdx_members');
	}

	function _add_file_email($image) {
	  // set variables
    $session_user = $this->Session->read('Auth.User');
    $uploader = $session_user['username'];
    $this->set('uploader', $uploader);
	  $ticket_name =  $image['Ticket'][0]['id'] . ': ' . $image['Ticket'][0]['name'];
	  $this->set('ticket_name', $ticket_name);
	  $s3_url = "http://s3.amazonaws.com".$image['Image']['s3_url'];
	  $this->set('s3_url', $s3_url);
	 
		$options['contain'] = array('User');
		$options['conditions'] = array('Ticket.id =' => $image['Ticket'][0]['id']);
		$ticket = $this->Ticket->find('first', $options);	
	  
	  $this->_mailUser($ticket, $uploader . " uploaded a file to " . $ticket_name, 'uploaded_file');
	}	


	
	// post a Comment
	function add_comment() {
		$this->TicketComment->create();
		$this->TicketComment->save($this->data);
		$ticket_comment = $this->TicketComment->read();
    $this->_add_comment_email($ticket_comment);
    $this->redirect('/mdx_members');
	}

	//works
	function _add_comment_email($ticket_comment) {
	  // set variables
	  $this->set('author', $ticket_comment['User']['username']);
	  $this->set('comment', $ticket_comment['TicketComment']['comment']);
	  $ticket_name =  $ticket_comment['Ticket']['id'] . ': ' . $ticket_comment['Ticket']['name'];
	  $this->set('ticket_name', $ticket_name);
	  $this->set('timestamps', $ticket_comment['TicketComment']['created']);
	 
		$options['contain'] = array('User');
		$options['conditions'] = array('Ticket.id =' => $ticket_comment['TicketComment']['ticket_id']);
		$ticket = $this->Ticket->find('first', $options);	
	  
	  $this->_mailUser($ticket, $ticket_name . ": Comment Posted", 'comment_posted');
	}

	// posts a CommentReply
	function reply_to_comment() {
		$this->CommentReply->create();
		$this->CommentReply->save($this->data);
		$comment_reply = $this->CommentReply->read();
		$this->_reply_comment_email($comment_reply);
		$this->redirect('/mdx_members');
	}

	//works
	function _reply_comment_email($comment_reply) {
	  // set variables
	  //debug($comment_reply);
	  $this->set('author', $comment_reply['User']['username']);
	  $this->set('reply', $comment_reply['CommentReply']['reply']);
	  $this->set('timestamps', $comment_reply['CommentReply']['created']);
	 
		$options['contain'] = array('User');
		$options['conditions'] = array('Ticket.id =' => $comment_reply['TicketComment']['ticket_id']);
		$ticket = $this->Ticket->find('first', $options);	
		$ticket_name = $ticket['Ticket']['id'] . ': ' . $ticket['Ticket']['name'];
	  $this->set('ticket_name', $ticket_name);
	  
	  $this->_mailUser($ticket, $ticket_name . ": Reply Posted", 'comment_reply');
	}

	function post_status_message() {
		$this->StatusMessage->create();
		$this->StatusMessage->save($this->data);
		$status_message = $this->StatusMessage->read();
		$this->_status_message_email($status_message);
		$this->redirect('/mdx_members');
	}

	function _status_message_email($status_message) {
	  // set variables
	  $this->set('author', $status_message['User']['username']);
	  $this->set('message', $status_message['StatusMessage']['message']);
	  $this->set('timestamps', $status_message['StatusMessage']['created']);
	 
		$options['contain'] = array('Member' => 'User');
		$options['conditions'] = array('Project.id =' => $status_message['StatusMessage']['project_id']);
		$project = $this->Project->find('first', $options);
		$project_name = $status_message['Project']['name'];
	  $this->set('project_name', $project_name);

	  $this->_mailUser($project, $project_name . ": New Status Message", 'status_message');
	}	
	
  /* ADMIN */

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
