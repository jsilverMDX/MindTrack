<h1>Generate Invoice from MindTrack Project</h1>


<div class="invoices index">
	<h2><?php __('Invoices');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>Invoice Id</th>
			<th>Client</th>
			<th>Paid</th>
			<th>Balance</th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($invoices as $invoice):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $invoice['Invoice']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($invoice['Client']['name'], array('controller' => 'clients', 'action' => 'view', $invoice['Client']['id'])); ?>
		</td>
		<td><?php echo $invoice['Invoice']['paid']; ?>&nbsp;</td>
		<td><?php echo $invoice['Invoice']['balance']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'show_invoice', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Html->link(__('Download', true), array('action' => 'download', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Html->link(__('Email Invoice to Client', true), array('action' => 'email_client_invoice', $invoice['Invoice']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>

<div class="invoices form">
<?php echo $this->Form->create('Invoice', array('url' => '/members/generate_invoice'));?>
	<fieldset>
 		<legend><?php __('Add Invoice'); ?></legend>
	<?php
		echo $this->Form->input('client_id');
		echo $this->Form->input('project_id');
		echo $this->Form->hidden('user_id', array('value' => $user_id));
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
