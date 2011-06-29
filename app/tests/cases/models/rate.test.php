<?php
/* Rate Test cases generated on: 2011-01-01 18:01:33 : 1293936753*/
App::import('Model', 'Rate');

class RateTestCase extends CakeTestCase {
	var $fixtures = array('app.rate', 'app.user', 'app.group', 'app.client', 'app.member', 'app.project', 'app.status_message', 'app.time_entry', 'app.ticket', 'app.ticket_comment', 'app.comment_reply', 'app.members_ticket', 'app.image', 'app.images_ticket', 'app.images_project', 'app.members_project', 'app.page');

	function startTest() {
		$this->Rate =& ClassRegistry::init('Rate');
	}

	function endTest() {
		unset($this->Rate);
		ClassRegistry::flush();
	}

}
?>