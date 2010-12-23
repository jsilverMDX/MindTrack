<div class="projects form">
<?php echo $this->Form->create('Project', array('url' => '/clients/edit_my_project/'.$this->data['Project']['id']));?>
	<fieldset>
 		<legend><?php __('Edit Project'); ?></legend>
	<?php
	  echo $this->Form->hidden('id');
		echo $this->Form->input('name');
		echo $this->Form->input('link');
		echo $this->Form->textarea('description');
		echo $this->Form->hidden('client_id', array('value' => $this->data['Client']['id']));
	?>
	</fieldset>
<?php echo $this->Form->end('Save');?>
</div>
