<?php
/* Client Test cases generated on: 2010-12-19 08:12:57 : 1292774637*/
App::import('Model', 'Client');

class ClientTestCase extends CakeTestCase {
	var $fixtures = array('app.client', 'app.user', 'app.project', 'app.ticket_comment');

	function startTest() {
		$this->Client =& ClassRegistry::init('Client');
	}

	function endTest() {
		unset($this->Client);
		ClassRegistry::flush();
	}

}
?>