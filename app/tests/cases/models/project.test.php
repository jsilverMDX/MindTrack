<?php
/* Project Test cases generated on: 2010-12-19 08:12:27 : 1292775567*/
App::import('Model', 'Project');

class ProjectTestCase extends CakeTestCase {
	var $fixtures = array('app.project', 'app.client', 'app.user', 'app.member', 'app.comment_reply', 'app.ticket_comment', 'app.ticket', 'app.members_ticket', 'app.page', 'app.status_message', 'app.members_project');

	function startTest() {
		$this->Project =& ClassRegistry::init('Project');
	}

	function endTest() {
		unset($this->Project);
		ClassRegistry::flush();
	}

}
?>