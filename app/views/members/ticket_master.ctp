<h1>Assign Tickets</h1>
<hr />

<? foreach($tickets as $ticket): ?>

<div class="ticket">

<div class="ticket-name"><? echo $ticket['Ticket']['id'] ?>: <? echo $ticket['Ticket']['name'] ?></div>
<div class="ticket-status">Status: <? echo $ticket['Ticket']['status'] ?></div>
<div class="ticket-assigned-to">
assigned to: 
<ul>
<? foreach($ticket['Member'] as $member): ?>
<li><? echo($member['name']); ?></li>
<? endforeach ?>
</ul>
</div>
<div class="ticket-assign-to">
<strong>Assign/Unassign Members:</strong>
<div class="tickets form">
<?php echo $this->Form->create(null, array('url' => '/members/assign_ticket/'.$ticket['Ticket']['id']));?>
	<?php
	  echo $this->Form->input('Ticket.id', array('value' => $ticket['Ticket']['id']));
		echo $this->Form->input('Member');
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
</div>

</div>
<hr />

<? endforeach ?>
