<?php
/* Invoice Fixture generated on: 2011-01-02 07:01:04 : 1293981124 */
class InvoiceFixture extends CakeTestFixture {
	var $name = 'Invoice';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'client_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'paid' => array('type' => 'binary', 'null' => true, 'default' => '0', 'length' => 1),
		'amt_due' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 10),
		'amt_paid' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 10),
		'notes' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'subtotal' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 10),
		'total' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 10),
		'balance' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_invoices_1' => array('column' => 'user_id', 'unique' => 0), 'fk_invoices_2' => array('column' => 'client_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'client_id' => 1,
			'user_id' => 1,
			'paid' => 'Lorem ipsum dolor sit ame',
			'amt_due' => 1,
			'amt_paid' => 1,
			'notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'subtotal' => 1,
			'total' => 1,
			'balance' => 1
		),
	);
}
?>