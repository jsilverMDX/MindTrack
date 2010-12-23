<div class="client-welcome">
<p>Welcome, <?php echo($client['Client']['name']); ?>!</p>
</div>

<div id="work">
<ul class="projects">
  <h3 class="my-projects">My Projects</h3>
  <?
    $projects = $client['Project'];
    foreach($projects as $project):
  ?>
  <li class="project">
  <div class="project-name">Project: <? echo($project['name']); ?></div>
  <ul class="tickets">
  <h4 class="my-tickets">Tickets</h4>
  <div class="new-ticket"><a href="/clients/new_ticket/<? echo($project['id']); ?>">New Ticket</a></div>
    <?
      $tickets = $project['Ticket'];
      foreach($tickets as $ticket):
    ?>
    <li class="ticket">
    <div class="ticket-info">
    <h4 class="ticket-header">Ticket #<? echo($ticket['id']); ?>: <? echo($ticket['name']); ?></h4>
    <div class="ticket-description">Description: <? echo($ticket['description']); ?></div>
    <div class="ticket-status">Status: <? echo($ticket['status']); ?></div>
    </div>
    <ul class="comments">
    <?
      $ticket_comments = $ticket['TicketComment'];
      foreach($ticket_comments as $comment):
    ?>
    <li class="comment">
    <div class="comment-text">Comment: <? echo($comment['comment']); ?> <br/ > Status: <? echo($comment['status']); ?></div>
    
    <ul class="replies">
      <?
        $comment_replies = $comment['CommentReply'];
        foreach($comment_replies as $reply):
      ?>
      <li class="reply">
      <div class="reply-text"><? echo($reply['reply']); ?></div>
      </li>
      <?
        endforeach;
      ?>
    </ul>
    </li>
    <?
      endforeach;
    ?>
    <div class="create-comment-form">
    <?php echo $this->Form->create('TicketComment', array('url' => '/clients/add_comment'));?>
	    <?php
		    echo $this->Form->input('comment');
		    echo $this->Form->hidden('client_id', array('value' => $client['Client']['id']));
		    echo $this->Form->hidden('ticket_id', array('value' => $ticket['id']));
		    echo $this->Form->input('status');
	    ?>
    <?php echo $this->Form->end(__('Submit', true));?>
    </div>
    </ul>
    </li>
    <?
      endforeach;
    ?>
  </ul>
  </li>
  <?
    endforeach;
  ?>
</ul>

</div>


