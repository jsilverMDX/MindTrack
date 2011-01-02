<?php
/* TimeEntries Test cases generated on: 2011-01-01 17:01:03 : 1293930123*/
App::import('Controller', 'TimeEntries');

class TestTimeEntriesController extends TimeEntriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TimeEntriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.time_entry', 'app.project', 'app.user', 'app.group', 'app.client', 'app.member', 'app.members_project', 'app.ticket', 'app.ticket_comment', 'app.comment_reply', 'app.members_ticket', 'app.image', 'app.images_ticket', 'app.images_project', 'app.status_message', 'app.page');

	function startTest() {
		$this->TimeEntries =& new TestTimeEntriesController();
		$this->TimeEntries->constructClasses();
	}

	function endTest() {
		unset($this->TimeEntries);
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