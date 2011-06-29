<?php
/* Rates Test cases generated on: 2011-01-01 18:01:27 : 1293936987*/
App::import('Controller', 'Rates');

class TestRatesController extends RatesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RatesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.rate', 'app.user', 'app.group', 'app.client', 'app.member', 'app.project', 'app.status_message', 'app.time_entry', 'app.ticket', 'app.ticket_comment', 'app.comment_reply', 'app.members_ticket', 'app.image', 'app.images_ticket', 'app.images_project', 'app.members_project', 'app.page');

	function startTest() {
		$this->Rates =& new TestRatesController();
		$this->Rates->constructClasses();
	}

	function endTest() {
		unset($this->Rates);
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