<h1>Generate Invoice from MindTrack Project</h1>


<div class="invoices form">
<?php echo $this->Form->create('Invoice', array('url' => '/invoices/generate_invoice'));?>
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
