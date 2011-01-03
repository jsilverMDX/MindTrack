<?php
/* LineItems Test cases generated on: 2011-01-02 07:01:06 : 1293981966*/
App::import('Controller', 'LineItems');

class TestLineItemsController extends LineItemsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LineItemsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.line_item', 'app.invoice', 'app.client', 'app.user', 'app.group', 'app.member', 'app.project', 'app.status_message', 'app.time_entry', 'app.ticket', 'app.ticket_comment', 'app.comment_reply', 'app.members_ticket', 'app.image', 'app.images_ticket', 'app.images_project', 'app.members_project', 'app.page');

	function startTest() {
		$this->LineItems =& new TestLineItemsController();
		$this->LineItems->constructClasses();
	}

	function endTest() {
		unset($this->LineItems);
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