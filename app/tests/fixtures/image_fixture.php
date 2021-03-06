<?php
/* Image Fixture generated on: 2010-12-24 22:12:59 : 1293260219 */
class ImageFixture extends CakeTestFixture {
	var $name = 'Image';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		's3_url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'u_id' => array('column' => 'user_id', 'unique' => 0), 'fk_Image_1' => array('column' => 'user_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			's3_url' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>