<div class="timeEntries form">
<?php echo $this->Form->create('TimeEntry');?>
	<fieldset>
 		<legend><?php __('Edit Time Entry'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hours');
		echo $this->Form->input('billed');
		echo $this->Form->input('project_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('TimeEntry.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('TimeEntry.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Time Entries', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>