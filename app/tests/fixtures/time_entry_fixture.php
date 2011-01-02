<?php
/* TimeEntry Fixture generated on: 2011-01-01 17:01:21 : 1293931221 */
class TimeEntryFixture extends CakeTestFixture {
	var $name = 'TimeEntry';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'hours' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 10),
		'billed' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'timestamp', 'null' => true, 'default' => NULL),
		'updated' => array('type' => 'timestamp', 'null' => true, 'default' => NULL),
		'project_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_time_entries_1' => array('column' => 'project_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'hours' => 1,
			'billed' => 1,
			'created' => '1293931221',
			'updated' => '1293931221',
			'project_id' => 1
		),
	);
}
?>