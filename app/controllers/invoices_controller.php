<?php
class InvoicesController extends AppController {

	var $name = 'Invoices';
  var $uses = array('Invoice', 'Rate', 'LineItem', 'Client', 'Member', 'TimeEntry', 'User', 'Image', 'Project', 'StatusMessage', 'Ticket', 'TicketComment', 'CommentReply');
	var $helpers = array('Html', 'Form', 'Time');
	var $layout = 'admin';

  function beforeFilter() {
    parent::beforeFilter(); 
    $this->Auth->allowedActions = array('show_invoice');
  }

	// generate invoice
	// for now, this is an admin only method since
	// we are billing together and this causes
	// more coordination
	
	// new invoice screen
	// show list of projects to generate an invoice object rom
	// should be one button and easy, we can edit it as admin anyway
	
	function new_invoice() {
    $this->set("title_for_layout", "MDX MindTrack | Generate Invoice");
	  $session_user = $this->Session->read('Auth.User');
	  $clients = $this->Client->find('list');
	  $projects = $this->Project->find('list');
    $this->set("user_id", $session_user['id']);
    $this->set('clients', $clients);
    $this->set('projects', $projects);
    
	}
	
	// create an invoice object
	// and then build it based on line items
	function generate_invoice() {
	  $this->Invoice->create();
	  $this->Invoice->save($this->data);
	  $invoice = $this->Invoice->read();
	  $invoice_id = $invoice['Invoice']['id'];
	  $project_id = $invoice['Invoice']['project_id'];
	  $options['contain'] = array('Member' => array('User' => array('TimeEntry' => array('conditions' => array('TimeEntry.billed =' => 0)))));
	  $project = $this->Project->find('first', $options);

	  $subtotal = 0.0;
	  foreach($project['Member'] as $member):
	    $time_entries = $member['User']['TimeEntry'];
	    $line_total = 0.0;
	    $rate = 0.0;
	    $hours_total = 0.0;
	    foreach($time_entries as $time_entry):
	      $rate_object = $this->Rate->find('first', array('conditions' => array('Rate.user_id =' => $time_entry['user_id'], 'Rate.project_id =' => $time_entry['project_id'])));
        $curr_rate = $rate_object['Rate']['amt_per_hour'];
        $rate = $curr_rate;
        $hours_worked = $time_entry['hours'];
        $hours_total += $hours_worked;
        $line_total += $hours_worked * $curr_rate;
        $this->TimeEntry->save(array('id' => $time_entry['id'], 'billed' => 1));
	    endforeach;
	    $subtotal += $line_total;
	    $this->LineItem->create();
	    $this->LineItem->save(array('invoice_id' => $invoice_id, 'line_total' => $line_total, 'rate' => $rate, 'hours' => $hours_total));
	  endforeach;
	  
	  $total = $subtotal;
	  
	  $this->Invoice->save(array('id' => $invoice_id, 'total' => $total, 'subtotal' => $subtotal, 'amt_due' => $total, 'balance' => $total));
	  
	  $this->redirect('/invoices/show_invoice/' . $invoice_id);
	}
	
	
	function show_invoice($id = null) {
	  $this->layout = 'invoice';
	  $options['contain'] = array('Client', 'LineItem', 'User');
	  $options['conditions'] = array('Invoice.id =' => $id);
	  $invoice = $this->Invoice->find('first', $options);
	  $this->set('invoice', $invoice);
	  //debug($invoice);
	}
	
	
	// yay this works 
	// a plastic green dragon was slain here
	// RIP
  function download($id = null) { 
      // generate and serve from HTML
      App::import('Component', 'Pdf'); 
      $Pdf = new PdfComponent(); 
      $Pdf->filename = 'mindynamics_invoice_'.$id;
      $Pdf->output = 'download'; 
      $Pdf->init(); 
      $Pdf->process(Router::url('/', true) . 'invoices/show_invoice/'. $id); 
      $this->render(false); 
  } 
  
  function email_client_invoice($id = null) {
      // generate, save and email from HTML
      App::import('Component', 'Pdf'); 
      $Pdf = new PdfComponent(); 
      $Pdf->filename = 'mindynamics_invoice_'.$id;
      $Pdf->output = 'file'; 
      $Pdf->init(); 
      $Pdf->process(Router::url('/', true) . 'invoices/show_invoice/'. $id); 
      // after here its generated
      $invoice_path = HTML2PS_DIR . 'out/' . $Pdf->filename . '.pdf';
      $options['conditions'] = array('Invoice.id =' => $id);
      $options['contain'] = array('Client' => 'User');
      $invoice = $this->Invoice->find('first', $options);

      $this->_send_invoice_email($invoice_path, $invoice['Client'], $invoice['Invoice']['id']);


      $this->redirect('/invoices');
  }
    
 	function _send_invoice_email($invoice_path, $invoice_client, $invoice_id) {
	  // set variables
	  $this->set('client_name', $invoice_client['name']);
	  
	  $this->Email->attachments = array($invoice_path);
	  $this->_mailUser($invoice_client, "Mindynamics Invoice #" . $invoice_id, 'invoice_client');
	}	
	
	   
	function index() {
		$this->Invoice->recursive = 0;
		$this->set('invoices', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid invoice', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('invoice', $this->Invoice->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Invoice->create();
			if ($this->Invoice->save($this->data)) {
				$this->Session->setFlash(__('The invoice has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.', true));
			}
		}
		$clients = $this->Invoice->Client->find('list');
		$users = $this->Invoice->User->find('list');
		$this->set(compact('clients', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid invoice', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Invoice->save($this->data)) {
				$this->Session->setFlash(__('The invoice has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Invoice->read(null, $id);
		}
		$clients = $this->Invoice->Client->find('list');
		$users = $this->Invoice->User->find('list');
		$this->set(compact('clients', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for invoice', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Invoice->delete($id)) {
			$this->Session->setFlash(__('Invoice deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Invoice was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
