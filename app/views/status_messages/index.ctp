<div class="statusMessages index">
	<h2><?php __('Status Messages');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('message');?></th>
			<th><?php echo $this->Paginator->sort('project_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($statusMessages as $statusMessage):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $statusMessage['StatusMessage']['id']; ?>&nbsp;</td>
		<td><?php echo $statusMessage['StatusMessage']['message']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($statusMessage['Project']['name'], array('controller' => 'projects', 'action' => 'view', $statusMessage['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($statusMessage['User']['username'], array('controller' => 'users', 'action' => 'view', $statusMessage['User']['id'])); ?>
		</td>
		<td><?php echo $statusMessage['StatusMessage']['created']; ?>&nbsp;</td>
		<td><?php echo $statusMessage['StatusMessage']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $statusMessage['StatusMessage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $statusMessage['StatusMessage']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $statusMessage['StatusMessage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $statusMessage['StatusMessage']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Status Message', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>