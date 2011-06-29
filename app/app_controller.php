<?php

class AppController extends Controller { 

  var $components = array('Acl', 'Session', 'Auth', 'Email', 'Upload.Upload', 'RequestHandler');

  function beforeFilter() {
  //Configure AuthComponent
  $this->Auth->actionPath = 'controllers/';
  $this->Auth->authorize = 'actions';
  $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
  $this->Auth->logoutRedirect = array('controller' => 'pages', 'action' => 'welcome');
  $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'login_redirect');
  }


  // our working gmail function dont break it
  function _sendMail($to,$to_name,$subject,$template) {
      $this->Email->smtpOptions = array(
            'port'=>'465', 
            'timeout'=>'30',
            'host' => 'ssl://smtp.gmail.com',
            'username'=>'mindbot@mindynamics.com',
            'password'=>'mindlove',
       );
      $this->Email->delivery = 'smtp';
      $this->Email->to = $to_name . " <".$to.">";
      $this->Email->subject = $subject;
      $this->Email->replyTo = 'mindbot@mindynamics.com';
      $this->Email->from = 'Mindy Mindbot <mindbot@mindynamics.com>';
      $this->Email->template = $template;
      $this->Email->sendAs = 'both';
      
      if ($this->Email->send()) {
        return true;
      }
      
		  $this->Email->log($this->Email->to);
		  $this->Email->log($this->Email->from);
		  $this->Email->log($this->Email->smtpError);
		  $this->Email->log($this->Email->smtpOptions);
		  
		  return false;
  }
  
  
  // pass me an array of objects that contain a User class and ill email them all
  function _mailUsers($users, $subject, $template) {
    if(isset($users)){
    foreach($users as $user):
      $this->set('to_name', $user['User']['username']);
      $this->_sendMail($user['User']['email'], $user['User']['username'], $subject, $template);
      $this->Email->reset();
    endforeach;
    }
  }
  
  // same as above but singular
  function _mailUser($user, $subject, $template) {
    if(isset($user['User'])){
      $this->set('to_name', $user['User']['username']);
      $this->_sendMail($user['User']['email'], $user['User']['username'], $subject, $template);
      $this->Email->reset();
    }
  } 
  
	//works
	function _reply_comment_email($comment_reply) {
	  // set variables
	  //debug($comment_reply);
	  $this->set('author', $comment_reply['User']['username']);
	  $this->set('reply', $comment_reply['CommentReply']['reply']);
	  $this->set('timestamps', $comment_reply['CommentReply']['created']);
	 
		$options['contain'] = array('Member' => 'User');
		$options['conditions'] = array('Ticket.id =' => $comment_reply['TicketComment']['ticket_id']);
		$ticket = $this->Ticket->find('first', $options);	
		$ticket_name = $ticket['Ticket']['id'] . ': ' . $ticket['Ticket']['name'];
	  $this->set('ticket_name', $ticket_name);
	  
	  $this->_mailUsers($ticket['Member'], $ticket_name . ": Reply Posted", 'comment_reply');
	  $this->_mailUser($ticket, $ticket_name . ": Reply Posted", 'comment_reply');
	
	}  
  
	//works
	function _add_comment_email($ticket_comment) {
	  // set variables
	  $this->set('author', $ticket_comment['User']['username']);
	  $this->set('comment', $ticket_comment['TicketComment']['comment']);
	  $ticket_name =  $ticket_comment['Ticket']['id'] . ': ' . $ticket_comment['Ticket']['name'];
	  $this->set('ticket_name', $ticket_name);
	  $this->set('timestamps', $ticket_comment['TicketComment']['created']);
	 
		$options['contain'] = array('Member' => 'User');
		$options['conditions'] = array('Ticket.id =' => $ticket_comment['TicketComment']['ticket_id']);
		$ticket = $this->Ticket->find('first', $options);	
	  
	  $this->_mailUsers($ticket['Member'], $ticket_name . ": Comment Posted", 'comment_posted');
	  $this->_mailUser($ticket, $ticket_name . ": Comment Posted", 'comment_posted');
	
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

	  $this->_mailUsers($project['Member'], $project_name . ": New Status Message", 'status_message');
	  $this->_mailUser($project, $project_name . ": New Status Message", 'status_message');

	}	
  
  
	function _add_ticket_email($ticket) {
	  // set variables
	  $this->set('author', $ticket['User']['username']);
	  $ticket_name = $ticket['Ticket']['name'];
	  $this->set('ticket_name', $ticket_name);
	  $this->set('description', $ticket['Ticket']['description']);
	  $this->set('timestamps', $ticket['Ticket']['created']);
	  $this->set('t_id', $ticket['Ticket']['id']);
	 
		$options['contain'] = array('Member' => 'User');
		$options['conditions'] = array('Project.id =' => $ticket['Ticket']['project_id']);
		$project = $this->Project->find('first', $options);
		$project_name = $project['Project']['name'];
	  $this->set('project_name', $project_name);

	  $this->_mailUsers($project['Member'], 'New Ticket on ' . $project_name . ": " . $ticket_name, 'new_ticket');
	  $this->_mailUser($project, 'New Ticket on ' . $project_name . ": " . $ticket_name, 'new_ticket');

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
	 
		$options['contain'] = array('Member' => 'User');
		$options['conditions'] = array('Ticket.id =' => $image['Ticket'][0]['id']);
		$ticket = $this->Ticket->find('first', $options);	
	  
	  $this->_mailUsers($ticket['Member'], $uploader . " uploaded a file to " . $ticket_name, 'uploaded_file');
	  $this->_mailUser($ticket, $uploader . " uploaded a file to " . $ticket_name, 'uploaded_file');

	}	  
  
	
	function _ticket_undone_email($ticket) {
	  // set variables
    $session_user = $this->Session->read('Auth.User');
    $this->set('reopener', $session_user['username']);
	  $ticket_name =  $ticket['Ticket']['id'] . ': ' . $ticket['Ticket']['name'];
	  $this->set('ticket_name', $ticket_name);
	 
		$options['contain'] = array('Member' => 'User');
		$options['conditions'] = array('Ticket.id =' => $ticket['Ticket']['id']);
		$ticket = $this->Ticket->find('first', $options);	
	  
	  $this->_mailUsers($ticket['Member'], $ticket_name . ": Marked as not done", 'ticket_undone');
	  $this->_mailUser($ticket, $ticket_name . ": Marked as not done", 'ticket_undone');
	}	
	  
  
	function _ticket_done_email($ticket) {
	
	  // set variables
	  $session_user = $this->Session->read('Auth.User');
    $this->set('completer', $session_user['username']);
	  $ticket_name =  $ticket['Ticket']['id'] . ': ' . $ticket['Ticket']['name'];
	  $this->set('ticket_name', $ticket_name);
	 
		$options['contain'] = array('Member' => 'User');
		$options['conditions'] = array('Ticket.id =' => $ticket['Ticket']['id']);
		$ticket = $this->Ticket->find('first', $options);	
	  
	  $this->_mailUsers($ticket['Member'], $ticket_name . ": Marked as done", 'ticket_done');
	  $this->_mailUser($ticket, $ticket_name . ": Marked as done", 'ticket_done');
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
	 
		$options['contain'] = array('Member' => 'User', 'User');
		$options['conditions'] = array('Project.id =' => $image['Project'][0]['id']);
		$project = $this->Project->find('first', $options);	
	  
	  $this->_mailUser($project, $uploader . " uploaded a file to " . $project_name, 'uploaded_file_proj');
	  $this->_mailUsers($project['Member'], $uploader . " uploaded a file to " . $project_name, 'uploaded_file_proj');
	}	  

 	function _send_invoice_email($invoice_path, $invoice_client, $invoice_id) {
	  // set variables
	  $this->set('client_name', $invoice_client['name']);
	  $this->set('invoice_link', Router::url('/', true) . 'invoices/show_invoice/' . $invoice_id);
	  $this->Email->attachments = array($invoice_path);
	  $this->_mailUser($invoice_client, "Mindynamics Invoice #" . $invoice_id, 'invoice_client');
	}	

}

?>
