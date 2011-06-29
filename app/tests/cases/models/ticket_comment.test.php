<?php
/* TicketComment Test cases generated on: 2010-12-19 08:12:59 : 1292775119*/
App::import('Model', 'TicketComment');

class TicketCommentTestCase extends CakeTestCase {
	var $fixtures = array('app.ticket_comment', 'app.client', 'app.user', 'app.project', 'app.ticket', 'app.comment_reply', 'app.member', 'app.page', 'app.status_message', 'app.members_project', 'app.members_ticket');

	function startTest() {
		$this->TicketComment =& ClassRegistry::init('TicketComment');
	}

	function endTest() {
		unset($this->TicketComment);
		ClassRegistry::flush();
	}

}
?>