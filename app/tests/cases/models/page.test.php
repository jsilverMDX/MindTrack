<?php
/* Page Test cases generated on: 2010-12-19 08:12:44 : 1292774924*/
App::import('Model', 'Page');

class PageTestCase extends CakeTestCase {
	var $fixtures = array('app.page', 'app.member', 'app.user', 'app.comment_reply', 'app.ticket_comment', 'app.status_message', 'app.project', 'app.members_project', 'app.ticket', 'app.members_ticket');

	function startTest() {
		$this->Page =& ClassRegistry::init('Page');
	}

	function endTest() {
		unset($this->Page);
		ClassRegistry::flush();
	}

}
?>