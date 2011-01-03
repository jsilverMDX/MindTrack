<?php
/* Invoice Test cases generated on: 2011-01-02 07:01:05 : 1293981125*/
App::import('Model', 'Invoice');

class InvoiceTestCase extends CakeTestCase {
	var $fixtures = array('app.invoice', 'app.client', 'app.user', 'app.group', 'app.member', 'app.project', 'app.status_message', 'app.time_entry', 'app.ticket', 'app.ticket_comment', 'app.comment_reply', 'app.members_ticket', 'app.image', 'app.images_ticket', 'app.images_project', 'app.members_project', 'app.page', 'app.line_item');

	function startTest() {
		$this->Invoice =& ClassRegistry::init('Invoice');
	}

	function endTest() {
		unset($this->Invoice);
		ClassRegistry::flush();
	}

}
?>