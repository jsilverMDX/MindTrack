<div class="ticketComments view">
<h2><?php  __('Ticket Comment');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticketComment['TicketComment']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticketComment['TicketComment']['comment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Client'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($ticketComment['Client']['name'], array('controller' => 'clients', 'action' => 'view', $ticketComment['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ticket'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($ticketComment['Ticket']['name'], array('controller' => 'tickets', 'action' => 'view', $ticketComment['Ticket']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticketComment['TicketComment']['status']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ticket Comment', true), array('action' => 'edit', $ticketComment['TicketComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Ticket Comment', true), array('action' => 'delete', $ticketComment['TicketComment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ticketComment['TicketComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Comments', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Comment', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client', true), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comment Replies', true), array('controller' => 'comment_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment Reply', true), array('controller' => 'comment_replies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Comment Replies');?></h3>
	<?php if (!empty($ticketComment['CommentReply'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Reply'); ?></th>
		<th><?php __('Ticket Comment Id'); ?></th>
		<th><?php __('Member Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ticketComment['CommentReply'] as $commentReply):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $commentReply['id'];?></td>
			<td><?php echo $commentReply['reply'];?></td>
			<td><?php echo $commentReply['ticket_comment_id'];?></td>
			<td><?php echo $commentReply['member_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'comment_replies', 'action' => 'view', $commentReply['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'comment_replies', 'action' => 'edit', $commentReply['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'comment_replies', 'action' => 'delete', $commentReply['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $commentReply['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment Reply', true), array('controller' => 'comment_replies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
