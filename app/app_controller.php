<?php

class AppController extends Controller { 

  var $components = array('Acl', 'Session', 'Auth');

  function beforeFilter() {
  //Configure AuthComponent
  $this->Auth->actionPath = 'controllers/';
  $this->Auth->authorize = 'actions';
  $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
  $this->Auth->logoutRedirect = array('controller' => 'pages', 'action' => 'welcome');
  $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'login_redirect');
  }  

}

?>
