<div class="ticketComments form">
<?php echo $this->Form->create('TicketComment');?>
	<fieldset>
 		<legend><?php __('Edit Ticket Comment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('comment');
		echo $this->Form->input('client_id');
		echo $this->Form->input('ticket_id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('TicketComment.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('TicketComment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ticket Comments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client', true), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comment Replies', true), array('controller' => 'comment_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment Reply', true), array('controller' => 'comment_replies', 'action' => 'add')); ?> </li>
	</ul>
</div>