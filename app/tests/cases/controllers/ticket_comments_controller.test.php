<?php
/* TicketComments Test cases generated on: 2010-12-19 08:12:54 : 1292775654*/
App::import('Controller', 'TicketComments');

class TestTicketCommentsController extends TicketCommentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TicketCommentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ticket_comment', 'app.client', 'app.user', 'app.member', 'app.comment_reply', 'app.page', 'app.status_message', 'app.project', 'app.ticket', 'app.members_ticket', 'app.members_project');

	function startTest() {
		$this->TicketComments =& new TestTicketCommentsController();
		$this->TicketComments->constructClasses();
	}

	function endTest() {
		unset($this->TicketComments);
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