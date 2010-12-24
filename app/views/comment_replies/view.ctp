<div class="commentReplies view">
<h2><?php  __('Comment Reply');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $commentReply['CommentReply']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Reply'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $commentReply['CommentReply']['reply']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ticket Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($commentReply['TicketComment']['comment'], array('controller' => 'ticket_comments', 'action' => 'view', $commentReply['TicketComment']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($commentReply['User']['username'], array('controller' => 'users', 'action' => 'view', $commentReply['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comment Reply', true), array('action' => 'edit', $commentReply['CommentReply']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Comment Reply', true), array('action' => 'delete', $commentReply['CommentReply']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $commentReply['CommentReply']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comment Replies', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment Reply', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Comments', true), array('controller' => 'ticket_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Comment', true), array('controller' => 'ticket_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
