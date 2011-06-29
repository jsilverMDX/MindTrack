<?php
/* Group Test cases generated on: 2010-12-20 05:12:03 : 1292851143*/
App::import('Model', 'Group');

class GroupTestCase extends CakeTestCase {
	var $fixtures = array('app.group', 'app.user', 'app.client', 'app.project', 'app.status_message', 'app.member', 'app.comment_reply', 'app.ticket_comment', 'app.ticket', 'app.members_ticket', 'app.page', 'app.members_project');

	function startTest() {
		$this->Group =& ClassRegistry::init('Group');
	}

	function endTest() {
		unset($this->Group);
		ClassRegistry::flush();
	}

}
?>