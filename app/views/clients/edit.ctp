<div class="clients form">
<?php echo $this->Form->create('Client');?>
	<fieldset>
 		<legend><?php __('Edit Client'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('skype');
		echo $this->Form->input('company');
		echo $this->Form->input('link');
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Client.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Client.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clients', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Comments', true), array('controller' => 'ticket_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Comment', true), array('controller' => 'ticket_comments', 'action' => 'add')); ?> </li>
	</ul>
</div>