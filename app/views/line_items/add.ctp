<div class="lineItems form">
<?php echo $this->Form->create('LineItem');?>
	<fieldset>
 		<legend><?php __('Add Line Item'); ?></legend>
	<?php
		echo $this->Form->input('invoice_id');
		echo $this->Form->input('notes');
		echo $this->Form->input('rate');
		echo $this->Form->input('hours');
		echo $this->Form->input('line_total');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Line Items', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Invoices', true), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice', true), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>