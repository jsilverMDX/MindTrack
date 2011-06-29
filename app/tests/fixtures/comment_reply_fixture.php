<?php
/* CommentReply Fixture generated on: 2010-12-19 08:12:54 : 1292774754 */
class CommentReplyFixture extends CakeTestFixture {
	var $name = 'CommentReply';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'reply' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ticket_comment_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'member_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_comment_replies_1' => array('column' => 'member_id', 'unique' => 0), 'fk_comment_replies_2' => array('column' => 'ticket_comment_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'reply' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ticket_comment_id' => 1,
			'member_id' => 1
		),
	);
}
?>