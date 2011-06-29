<?php
/* Members Test cases generated on: 2010-12-19 08:12:26 : 1292775446*/
App::import('Controller', 'Members');

class TestMembersController extends MembersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MembersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.member', 'app.user', 'app.client', 'app.project', 'app.ticket_comment', 'app.ticket', 'app.members_ticket', 'app.comment_reply', 'app.page', 'app.status_message', 'app.members_project');

	function startTest() {
		$this->Members =& new TestMembersController();
		$this->Members->constructClasses();
	}

	function endTest() {
		unset($this->Members);
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