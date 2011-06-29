<?php
/* CommentReplies Test cases generated on: 2010-12-19 08:12:47 : 1292775407*/
App::import('Controller', 'CommentReplies');

class TestCommentRepliesController extends CommentRepliesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CommentRepliesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.comment_reply', 'app.ticket_comment', 'app.client', 'app.user', 'app.member', 'app.page', 'app.status_message', 'app.project', 'app.members_project', 'app.ticket', 'app.members_ticket');

	function startTest() {
		$this->CommentReplies =& new TestCommentRepliesController();
		$this->CommentReplies->constructClasses();
	}

	function endTest() {
		unset($this->CommentReplies);
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