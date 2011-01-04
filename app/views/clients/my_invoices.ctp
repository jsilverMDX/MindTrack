<h1 class="my-invoices">My Invoices</h1>


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
		<td><?php echo $invoice['Invoice']['paid']; ?>&nbsp;</td>
		<td><?php echo $invoice['Invoice']['balance']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'show_invoice', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Html->link(__('Download', true), array('action' => 'download', $invoice['Invoice']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
