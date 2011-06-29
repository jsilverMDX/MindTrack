<?php
/* Invoices Test cases generated on: 2011-01-02 07:01:26 : 1293981146*/
App::import('Controller', 'Invoices');

class TestInvoicesController extends InvoicesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class InvoicesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.invoice', 'app.client', 'app.user', 'app.group', 'app.member', 'app.project', 'app.status_message', 'app.time_entry', 'app.ticket', 'app.ticket_comment', 'app.comment_reply', 'app.members_ticket', 'app.image', 'app.images_ticket', 'app.images_project', 'app.members_project', 'app.page', 'app.line_item');

	function startTest() {
		$this->Invoices =& new TestInvoicesController();
		$this->Invoices->constructClasses();
	}

	function endTest() {
		unset($this->Invoices);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>