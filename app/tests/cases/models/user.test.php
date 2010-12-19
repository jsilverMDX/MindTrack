<?php
/* User Test cases generated on: 2010-12-19 08:12:00 : 1292775300*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.client', 'app.project', 'app.ticket_comment', 'app.ticket', 'app.member', 'app.comment_reply', 'app.page', 'app.status_message', 'app.members_project', 'app.members_ticket');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
?>