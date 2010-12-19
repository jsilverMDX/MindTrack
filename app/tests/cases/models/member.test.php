<?php
/* Member Test cases generated on: 2010-12-19 08:12:26 : 1292774846*/
App::import('Model', 'Member');

class MemberTestCase extends CakeTestCase {
	var $fixtures = array('app.member', 'app.user', 'app.comment_reply', 'app.ticket_comment', 'app.page', 'app.status_message', 'app.project', 'app.members_project', 'app.ticket', 'app.members_ticket');

	function startTest() {
		$this->Member =& ClassRegistry::init('Member');
	}

	function endTest() {
		unset($this->Member);
		ClassRegistry::flush();
	}

}
?>