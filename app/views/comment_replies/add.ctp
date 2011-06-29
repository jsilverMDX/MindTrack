<div class="commentReplies form">
<?php echo $this->Form->create('CommentReply');?>
	<fieldset>
 		<legend><?php __('Add Comment Reply'); ?></legend>
	<?php
		echo $this->Form->input('reply');
		echo $this->Form->input('ticket_comment_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comment Replies', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ticket Comments', true), array('controller' => 'ticket_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Comment', true), array('controller' => 'ticket_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>