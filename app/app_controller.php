<?php

class AppController extends Controller { 

  var $components = array('Acl', 'Session', 'Auth', 'Email', 'Upload.Upload');

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
    foreach($users as $user):
      $this->set('to_name', $user['User']['username']);
      $this->_sendMail($user['User']['email'], $user['User']['username'], $subject, $template);
      $this->Email->reset();
    endforeach;
  }
  
  // same as above but singular
  function _mailUser($user, $subject, $template) {
      $this->set('to_name', $user['User']['username']);
      $this->_sendMail($user['User']['email'], $user['User']['username'], $subject, $template);
      $this->Email->reset();
  } 

}

?>
