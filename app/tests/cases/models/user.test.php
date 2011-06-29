<?php
/* User Test cases generated on: 2010-12-20 05:12:20 : 1292851040*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.group', 'app.client', 'app.project', 'app.status_message', 'app.member', 'app.comment_reply', 'app.ticket_comment', 'app.ticket', 'app.members_ticket', 'app.page', 'app.members_project');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
?>