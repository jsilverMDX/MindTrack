<?php
/* Tickets Test cases generated on: 2010-12-19 08:12:03 : 1292775663*/
App::import('Controller', 'Tickets');

class TestTicketsController extends TicketsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TicketsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ticket', 'app.project', 'app.client', 'app.user', 'app.member', 'app.comment_reply', 'app.ticket_comment', 'app.page', 'app.status_message', 'app.members_project', 'app.members_ticket');

	function startTest() {
		$this->Tickets =& new TestTicketsController();
		$this->Tickets->constructClasses();
	}

	function endTest() {
		unset($this->Tickets);
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