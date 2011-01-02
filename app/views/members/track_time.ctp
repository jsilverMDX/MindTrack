<h1>Track Time</h1>

<div class="timeEntries form">
<?php echo $this->Form->create('TimeEntry', array('url' => '/members/punch_timeclock'));?>
	<fieldset>
 		<legend><?php __('Add Time Entry'); ?></legend>
	<?php
		echo $this->Form->input('hours');
		echo $this->Form->input('project_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>


<? foreach($member['Project'] as $project): ?>
<? $hours_worked = 0; ?>
<h2 class="project-name"><?= $project['name'] ?></h2>

<? foreach($project['TimeEntry'] as $entry): ?>
<div class="time-entry">
<?= $entry['hours'] ?> hours
<? $hours_worked += $entry['hours']; ?>
</div>
<? endforeach; ?>

<div class="total-hours">Total: <?= $hours_worked ?></div>

<? endforeach; ?>
