<?php
/* CommentReply Test cases generated on: 2010-12-19 08:12:54 : 1292774754*/
App::import('Model', 'CommentReply');

class CommentReplyTestCase extends CakeTestCase {
	var $fixtures = array('app.comment_reply', 'app.ticket_comment', 'app.member');

	function startTest() {
		$this->CommentReply =& ClassRegistry::init('CommentReply');
	}

	function endTest() {
		unset($this->CommentReply);
		ClassRegistry::flush();
	}

}
?>