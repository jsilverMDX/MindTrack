<?php
/* Projects Test cases generated on: 2010-12-19 08:12:58 : 1292775598*/
App::import('Controller', 'Projects');

class TestProjectsController extends ProjectsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProjectsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.project', 'app.client', 'app.user', 'app.member', 'app.comment_reply', 'app.ticket_comment', 'app.ticket', 'app.members_ticket', 'app.page', 'app.status_message', 'app.members_project');

	function startTest() {
		$this->Projects =& new TestProjectsController();
		$this->Projects->constructClasses();
	}

	function endTest() {
		unset($this->Projects);
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