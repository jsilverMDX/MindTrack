<?php
/* StatusMessage Test cases generated on: 2010-12-19 08:12:04 : 1292775004*/
App::import('Model', 'StatusMessage');

class StatusMessageTestCase extends CakeTestCase {
	var $fixtures = array('app.status_message', 'app.project', 'app.member', 'app.user', 'app.comment_reply', 'app.ticket_comment', 'app.page', 'app.members_project', 'app.ticket', 'app.members_ticket');

	function startTest() {
		$this->StatusMessage =& ClassRegistry::init('StatusMessage');
	}

	function endTest() {
		unset($this->StatusMessage);
		ClassRegistry::flush();
	}

}
?>