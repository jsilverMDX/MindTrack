<div class="tickets form">
<?php echo $this->Form->create('Ticket', array('url' => '/clients/edit_ticket'));?>
	<fieldset>
 		<legend><?php __('Edit Ticket'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('project_id');
		echo $this->Form->input('status');
		echo $this->Form->input('user_id');
		echo $this->Form->input('Member');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
