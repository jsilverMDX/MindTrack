<div class="invoices form">
<?php echo $this->Form->create('Invoice');?>
	<fieldset>
 		<legend><?php __('Edit Invoice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('paid');
		echo $this->Form->input('amt_due');
		echo $this->Form->input('amt_paid');
		echo $this->Form->input('notes');
		echo $this->Form->input('subtotal');
		echo $this->Form->input('total');
		echo $this->Form->input('balance');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Invoice.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Invoice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client', true), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Line Items', true), array('controller' => 'line_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Line Item', true), array('controller' => 'line_items', 'action' => 'add')); ?> </li>
	</ul>
</div>