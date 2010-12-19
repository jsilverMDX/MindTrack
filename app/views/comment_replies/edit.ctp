<div class="commentReplies form">
<?php echo $this->Form->create('CommentReply');?>
	<fieldset>
 		<legend><?php __('Edit Comment Reply'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('reply');
		echo $this->Form->input('ticket_comment_id');
		echo $this->Form->input('member_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CommentReply.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CommentReply.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Comment Replies', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ticket Comments', true), array('controller' => 'ticket_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Comment', true), array('controller' => 'ticket_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members', true), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>