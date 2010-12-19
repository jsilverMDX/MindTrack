<?php
/* Ticket Test cases generated on: 2010-12-19 08:12:44 : 1292775224*/
App::import('Model', 'Ticket');

class TicketTestCase extends CakeTestCase {
	var $fixtures = array('app.ticket', 'app.project', 'app.ticket_comment', 'app.client', 'app.user', 'app.comment_reply', 'app.member', 'app.page', 'app.status_message', 'app.members_project', 'app.members_ticket');

	function startTest() {
		$this->Ticket =& ClassRegistry::init('Ticket');
	}

	function endTest() {
		unset($this->Ticket);
		ClassRegistry::flush();
	}

}
?>