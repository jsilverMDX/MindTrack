<?php
/* LineItem Test cases generated on: 2011-01-02 07:01:26 : 1293981266*/
App::import('Model', 'LineItem');

class LineItemTestCase extends CakeTestCase {
	var $fixtures = array('app.line_item', 'app.invoice', 'app.client', 'app.user', 'app.group', 'app.member', 'app.project', 'app.status_message', 'app.time_entry', 'app.ticket', 'app.ticket_comment', 'app.comment_reply', 'app.members_ticket', 'app.image', 'app.images_ticket', 'app.images_project', 'app.members_project', 'app.page');

	function startTest() {
		$this->LineItem =& ClassRegistry::init('LineItem');
	}

	function endTest() {
		unset($this->LineItem);
		ClassRegistry::flush();
	}

}
?>