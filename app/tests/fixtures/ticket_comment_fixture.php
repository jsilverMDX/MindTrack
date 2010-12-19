<?php
/* TicketComment Fixture generated on: 2010-12-19 08:12:59 : 1292775119 */
class TicketCommentFixture extends CakeTestFixture {
	var $name = 'TicketComment';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'comment' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'client_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'ticket_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'status' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_ticket_comments_1' => array('column' => 'client_id', 'unique' => 0), 'fk_ticket_comments_2' => array('column' => 'ticket_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'client_id' => 1,
			'ticket_id' => 1,
			'status' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>