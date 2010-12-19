<div class="commentReplies index">
	<h2><?php __('Comment Replies');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('reply');?></th>
			<th><?php echo $this->Paginator->sort('ticket_comment_id');?></th>
			<th><?php echo $this->Paginator->sort('member_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($commentReplies as $commentReply):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $commentReply['CommentReply']['id']; ?>&nbsp;</td>
		<td><?php echo $commentReply['CommentReply']['reply']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($commentReply['TicketComment']['comment'], array('controller' => 'ticket_comments', 'action' => 'view', $commentReply['TicketComment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($commentReply['Member']['name'], array('controller' => 'members', 'action' => 'view', $commentReply['Member']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $commentReply['CommentReply']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $commentReply['CommentReply']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $commentReply['CommentReply']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $commentReply['CommentReply']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Comment Reply', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ticket Comments', true), array('controller' => 'ticket_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Comment', true), array('controller' => 'ticket_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members', true), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>