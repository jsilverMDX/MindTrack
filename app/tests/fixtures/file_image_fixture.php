<?php
/* FileImage Fixture generated on: 2011-01-03 15:01:09 : 1294098669 */
class FileImageFixture extends CakeTestFixture {
	var $name = 'FileImage';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		's3_url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'u_id' => array('column' => 'user_id', 'unique' => 0), 'fk_Image_1' => array('column' => 'user_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			's3_url' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-01-03 15:51:09',
			'updated' => '2011-01-03 15:51:09'
		),
	);
}
?>