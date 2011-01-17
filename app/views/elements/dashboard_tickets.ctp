<!-- project hidden tickets partial -->
<div class="split-view-right-content" id="ticket-<? echo($ticket['id']); ?>">
<div class="view button-view mark-done-btn" done="true" ticketid="<?= $ticket['id']; ?>" onclick="changeTicketStatus(this);"> 
  <div class="button-view-mid"> 
  <div class="button-view-label">Mark Done</div> 
</div> 
</div>
<h2>#<? echo($ticket['num']); ?>:  <? echo($ticket['name']); ?></h2>
<h3>Status: <?= $ticket['status']; ?></h3>

<p><?= $ticket['description']; ?></p>

</div>
