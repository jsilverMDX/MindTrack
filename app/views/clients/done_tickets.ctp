<h1 class="completed-tickets">Completed Tickets</h1>


<div id="work">
<ul class="projects">
  <?
    $projects = $user['Project'];
    foreach($projects as $project):
  ?>
  <li class="project">
  <div class="project-info">
  <div class="project-name">Project: <? echo($project['name']); ?></div>
  </div>
  <ul class="tickets">
    <?
      $tickets = $project['Ticket'];
      foreach($tickets as $ticket):
    ?>
    <li class="ticket">
    <div class="ticket-info">
    <h4 class="ticket-header">Ticket #<? echo($ticket['id']); ?>: <? echo($ticket['name']); ?></h4>
    <div class="ticket-description">Description: <? echo($ticket['description']); ?></div>
    <div class="ticket-status">Status: <? echo($ticket['status']); ?>
    <a href="/clients/mark_as_not_done/<? echo($ticket['id']); ?>">Mark as Not Done</a>
    </div>
    </div>
    <ul class="images">
    <?
      $images = $ticket['Image'];
      foreach($images as $image):
    ?>
    <li><? echo($this->Html->link($image['name'], "http://s3.amazonaws.com".$image['s3_url'])); ?></li>
    <?
      endforeach;
    ?>
    </ul>
    <ul class="comments">
    <?
      $ticket_comments = $ticket['TicketComment'];
      foreach($ticket_comments as $comment):
    ?>
    <li class="comment">
    <div class="comment-text">Comment: <? echo($comment['comment']); ?> <br/ > Status: <? echo($comment['status']); ?> <br/ > Posted by: <? echo($comment['User']['username']); ?></div>
    
    <ul class="replies">
      <?
        $comment_replies = $comment['CommentReply'];
        foreach($comment_replies as $reply):
      ?>
      <li class="reply">
      <div class="reply-text"><? echo($reply['reply']); ?> - <? echo($reply['User']['username']); ?> </div>
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


