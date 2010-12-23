<div class="member">
<p>Hello, <?php echo($member['Member']['name']); ?>!</p>
<p>You are a <?php echo($member['Member']['user_rank']); ?> and have <?php echo($member['Member']['karma_points']); ?> points!</p>
</div>

<div id="work">
<ul class="projects">
  <h3 class="my-projects">Projects</h3>
  <?
    $projects = $member['Project'];
    foreach($projects as $project):
  ?>
  <li class="project">
  <div class="project-name">Project: <? echo($project['name']); ?></div>
  <ul class="tickets">
  <h4 class="my-tickets"><? echo($project['name']); ?> Tickets</h4>
    <?
      $tickets = $project['Ticket'];
      foreach($tickets as $ticket):
    ?>
    <li class="ticket">
    <h4 class="ticket-header">Ticket</h4>
    <div class="ticket-name">Name: <? echo($ticket['name']); ?></div>
    <div class="ticket-description">Description: <? echo($ticket['description']); ?></div>
    <div class="ticket-status">Status: <? echo($ticket['status']); ?></div>
    <ul class="comments">
    <?
      $ticket_comments = $ticket['TicketComment'];
      foreach($ticket_comments as $comment):
    ?>
    <li class="comment">
    <div class="comment-text">Comment: <? echo($comment['comment']); ?></div>
    <div class="comment-status">Status: <? echo($comment['status']); ?></div>
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


