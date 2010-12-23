<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $uses = array('User', 'Group');
	var $helpers = array('Form', 'Html');
	
	// dev admin hack
	/*
	function beforeFilter()
	{
	  parent::beforeFilter();
	  $this->Auth->allow('*');
	}
  
  
  function initDB() {
    $group =& $this->User->Group;
    //Allow admins to everything
    $group->id = 1;
    $this->Acl->allow($group, 'controllers');
  }
  */
  
  // allows anyone to login/logout no permissions
  function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('login', 'logout', 'login_redirect');
  }
  
  function login() {
    $user = $this->Session->read('Auth.User');
	  if(!$user){
	    $this->set('title_for_layout', 'MDX | Login');
	  }
  }
  
  function logout() {
    $this->redirect($this->Auth->logout());
  }
  
  // this function redirects any logging in user
  function login_redirect() {
    $user_session = $this->Session->read('Auth.User');
    $user = $this->User->findById($user_session['id']);
    $group_name = $user['Group']['name'];
    if($group_name == 'admin') {
      $this->redirect('/mdx_admin');
    } elseif($group_name == 'member') {
      $this->redirect('/mdx_member');
    } elseif($group_name == 'client') {
      $this->redirect('/mdx_client');
    }
  }
  
  // admin landing ... just show me everything admin can do
  function admin_landing() {
    $this->layout = 'admin';
    $this->set('title_for_layout', 'MDX Admin');
  }
  
	function index() {
	  $this->layout = 'admin';
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
  	$this->layout = 'admin';
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
	  $this->layout = 'admin';
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function edit($id = null) {
	  $this->layout = 'admin';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
