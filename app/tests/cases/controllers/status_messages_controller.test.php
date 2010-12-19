<?php
/* StatusMessages Test cases generated on: 2010-12-19 08:12:41 : 1292775641*/
App::import('Controller', 'StatusMessages');

class TestStatusMessagesController extends StatusMessagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StatusMessagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.status_message', 'app.project', 'app.client', 'app.user', 'app.member', 'app.comment_reply', 'app.ticket_comment', 'app.ticket', 'app.members_ticket', 'app.page', 'app.members_project');

	function startTest() {
		$this->StatusMessages =& new TestStatusMessagesController();
		$this->StatusMessages->constructClasses();
	}

	function endTest() {
		unset($this->StatusMessages);
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