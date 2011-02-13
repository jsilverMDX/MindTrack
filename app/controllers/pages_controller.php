<?php
class PagesController extends AppController {

	var $name = 'Pages';

  function beforeFilter() {
    parent::beforeFilter(); 
    $this->Auth->allowedActions = array('welcome', 'display', 'notfound');
    $this->set('current_page', substr($this->here, 2)); // get page by URL
  }
  
  // show us a page
  function display() {
    // get page name (found in beforeFilter)
    $page_name = $this->viewVars['current_page'];
    // get the page contents (like a partial)
    $page = file_get_contents('page_content/'.$page_name.'.html');
    // set the title
    $this->set('title_for_layout', "mindynamics | " . ucwords($page_name));
    if(!(empty($page))) { // same as unless page.nil
      $this->set('page', $page);
    } else { $this->cakeError('error404'); }
  }
  
  // custom 404
  function notfound() {
    $this->set('title_for_layout', "mindynamics | 404 Not Found");
  }

  function welcome() {
    //$welcome_content = $this->Page->field("page", array('name' => 'splash'));
    $welcome_content = file_get_contents('page_content/welcome.html');
    
    $this->set('title_for_layout', "mindynamics | Welcome");
    $this->set('page_name', 'welcome');
    $this->set("welcome_content", $welcome_content);
  }

	function index() {
	  $this->layout = 'admin';
		$this->Page->recursive = 0;
		$this->set('pages', $this->paginate());
	}

	function view($id = null) {
	  $this->layout = 'admin';
		if (!$id) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('page', $this->Page->read(null, $id));
	}

	function add() {
	  $this->layout = 'admin';
		if (!empty($this->data)) {
			$this->Page->create();
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(__('The page has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Page->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
	  $this->layout = 'admin';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(__('The page has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Page->read(null, $id);
		}
		$users = $this->Page->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Page->delete($id)) {
			$this->Session->setFlash(__('Page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Page was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
