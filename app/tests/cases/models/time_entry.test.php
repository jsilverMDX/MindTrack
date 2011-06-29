<?php
/* TimeEntry Test cases generated on: 2011-01-01 17:01:24 : 1293931224*/
App::import('Model', 'TimeEntry');

class TimeEntryTestCase extends CakeTestCase {
	var $fixtures = array('app.time_entry', 'app.project', 'app.user', 'app.group', 'app.client', 'app.member', 'app.members_project', 'app.ticket', 'app.ticket_comment', 'app.comment_reply', 'app.members_ticket', 'app.image', 'app.images_ticket', 'app.images_project', 'app.status_message', 'app.page');

	function startTest() {
		$this->TimeEntry =& ClassRegistry::init('TimeEntry');
	}

	function endTest() {
		unset($this->TimeEntry);
		ClassRegistry::flush();
	}

}
?>