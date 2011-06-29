<?php
/* Images Test cases generated on: 2010-12-24 21:12:25 : 1293254965*/
App::import('Controller', 'Images');

class TestImagesController extends ImagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ImagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.image', 'app.user', 'app.group', 'app.client', 'app.member', 'app.project', 'app.status_message', 'app.ticket', 'app.ticket_comment', 'app.comment_reply', 'app.members_ticket', 'app.members_project', 'app.page');

	function startTest() {
		$this->Images =& new TestImagesController();
		$this->Images->constructClasses();
	}

	function endTest() {
		unset($this->Images);
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