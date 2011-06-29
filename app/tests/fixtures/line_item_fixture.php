<?php
/* LineItem Fixture generated on: 2011-01-02 07:01:26 : 1293981266 */
class LineItemFixture extends CakeTestFixture {
	var $name = 'LineItem';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'invoice_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'notes' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'rate' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 10),
		'hours' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 10),
		'line_total' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'invoice_id' => 1,
			'notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'rate' => 1,
			'hours' => 1,
			'line_total' => 1
		),
	);
}
?>