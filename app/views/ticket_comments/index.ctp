<div class="ticketComments index">
	<h2><?php __('Ticket Comments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('comment');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('ticket_id');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ticketComments as $ticketComment):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ticketComment['TicketComment']['id']; ?>&nbsp;</td>
		<td><?php echo $ticketComment['TicketComment']['comment']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ticketComment['User']['username'], array('controller' => 'users', 'action' => 'view', $ticketComment['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ticketComment['Ticket']['name'], array('controller' => 'tickets', 'action' => 'view', $ticketComment['Ticket']['id'])); ?>
		</td>
		<td><?php echo $ticketComment['TicketComment']['status']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $ticketComment['TicketComment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ticketComment['TicketComment']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ticketComment['TicketComment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ticketComment['TicketComment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ticket Comment', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comment Replies', true), array('controller' => 'comment_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment Reply', true), array('controller' => 'comment_replies', 'action' => 'add')); ?> </li>
	</ul>
</div>