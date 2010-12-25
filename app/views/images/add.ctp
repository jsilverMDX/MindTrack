<div class="images form">
<?php echo $this->Form->create('Image', array('enctype' => 'multipart/form-data'));?>
	<fieldset>
 		<legend><?php __('Add Image'); ?></legend>
	<?php
	  echo $this->Form->hidden('s3_url');
		echo $this->Form->input('user_id');
		echo $this->Form->file('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Images', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
