<?php
/* Pages Test cases generated on: 2010-12-19 08:12:30 : 1292775510*/
App::import('Controller', 'Pages');

class TestPagesController extends PagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.page', 'app.member', 'app.user', 'app.client', 'app.project', 'app.ticket_comment', 'app.ticket', 'app.members_ticket', 'app.comment_reply', 'app.status_message', 'app.members_project');

	function startTest() {
		$this->Pages =& new TestPagesController();
		$this->Pages->constructClasses();
	}

	function endTest() {
		unset($this->Pages);
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