<?php
/* StatusMessage Fixture generated on: 2010-12-19 08:12:04 : 1292775004 */
class StatusMessageFixture extends CakeTestFixture {
	var $name = 'StatusMessage';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'message' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'member_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_status_messages_1' => array('column' => 'project_id', 'unique' => 0), 'fk_status_messages_2' => array('column' => 'member_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'message' => 'Lorem ipsum dolor sit amet',
			'project_id' => 1,
			'member_id' => 1
		),
	);
}
?>