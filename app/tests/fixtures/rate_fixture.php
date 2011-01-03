<?php
/* Rate Fixture generated on: 2011-01-01 18:01:33 : 1293936753 */
class RateFixture extends CakeTestFixture {
	var $name = 'Rate';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'amt_per_hour' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'project_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_rates_1' => array('column' => 'project_id', 'unique' => 0), 'fk_rates_2' => array('column' => 'user_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'amt_per_hour' => 1,
			'project_id' => 1
		),
	);
}
?>