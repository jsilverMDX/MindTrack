<?php
class TicketsController extends AppController {

	var $name = 'Tickets';
	var $uses = array('Ticket', 'User', 'Project');
	
	function ticket_redirect() {
	  // find project by slug
	  $name = $this->params['name'];
	  $project = $this->Project->findByName($name);
	  $num = $this->params['num'];
	  $options['conditions'] = array('Ticket.num' => $num, 'Ticket.project_id' => $project['Project']['id']);
	  $ticket = $this->Ticket->find($num);
	  $id = $ticket['Ticket']['id'];
    $user_session = $this->Session->read('Auth.User');
    $user = $this->User->findById($user_session['id']);
    $group_name = $user['Group']['name'];
    //debug($group_name);
    if($group_name == 'admin') {
      $this->redirect('/tickets/view/'.$id);
    } elseif($group_name == 'member') {
      $this->redirect('/members/show_ticket/'.$id);
    } elseif($group_name == 'client') {
      $this->redirect('/clients/show_ticket/'.$id);
    }
	}
	

	function index() {
	  $this->layout = 'admin';
		$this->Ticket->recursive = 0;
		$this->set('tickets', $this->paginate());
	}

	function view($id = null) {
	  $this->layout = 'admin';
		if (!$id) {
			$this->Session->setFlash(__('Invalid ticket', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ticket', $this->Ticket->read(null, $id));
	}

	function add() {
	  $this->layout = 'admin';
		if (!empty($this->data)) {
			$this->Ticket->create();
			if ($this->Ticket->save($this->data)) {
				$this->Session->setFlash(__('The ticket has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket could not be saved. Please, try again.', true));
			}
		}
		$projects = $this->Ticket->Project->find('list');
		$users = $this->Ticket->User->find('list');
		$this->set(compact('projects', 'users'));
	}

	function edit($id = null) {
	  $this->layout = 'admin';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ticket', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ticket->save($this->data)) {
				$this->Session->setFlash(__('The ticket has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ticket->read(null, $id);
		}
		$projects = $this->Ticket->Project->find('list');
		$users = $this->Ticket->User->find('list');
		$this->set(compact('projects', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ticket', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ticket->delete($id)) {
			$this->Session->setFlash(__('Ticket deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ticket was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
