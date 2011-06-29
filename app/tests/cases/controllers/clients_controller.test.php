<?php
/* Clients Test cases generated on: 2010-12-19 08:12:29 : 1292775389*/
App::import('Controller', 'Clients');

class TestClientsController extends ClientsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ClientsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.client', 'app.user', 'app.member', 'app.comment_reply', 'app.ticket_comment', 'app.ticket', 'app.project', 'app.members_ticket', 'app.page', 'app.status_message', 'app.members_project');

	function startTest() {
		$this->Clients =& new TestClientsController();
		$this->Clients->constructClasses();
	}

	function endTest() {
		unset($this->Clients);
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