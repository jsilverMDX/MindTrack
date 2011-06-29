<?php
/* Image Test cases generated on: 2010-12-24 22:12:00 : 1293260220*/
App::import('Model', 'Image');

class ImageTestCase extends CakeTestCase {
	var $fixtures = array('app.image', 'app.user', 'app.group', 'app.client', 'app.member', 'app.project', 'app.status_message', 'app.ticket', 'app.ticket_comment', 'app.comment_reply', 'app.members_ticket', 'app.members_project', 'app.page');

	function startTest() {
		$this->Image =& ClassRegistry::init('Image');
	}

	function endTest() {
		unset($this->Image);
		ClassRegistry::flush();
	}

}
?>