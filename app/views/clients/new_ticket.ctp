<div class="tickets form">
<?php echo $this->Form->create('Ticket', array('url' => '/clients/add_ticket'));?>
	<fieldset>
 		<legend>Add Ticket</legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->hidden('project_id', array('value' => $project_id));
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end('Submit');?>
</div>
