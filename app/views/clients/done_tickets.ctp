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
    <?php $tstatus = (strtolower($ticket['status']) == "done") ? "done" : "not done" ?>
    <li class="ticket">
    <div class="ticket-info">
    <h4 class="ticket-header">Ticket #<? echo($ticket['id']); ?>: <? echo($ticket['name']); ?></h4>
    <div class="ticket-description"><div class="the-description"><?= $textile->process($ticket['description']); ?></div>    <div class="ticket-status">Status: <? echo($ticket['status']); ?> (<?= $tstatus ?>)
    <a href="/clients/mark_as_not_done/<? echo($ticket['id']); ?>">Mark as Not Done</a>
    <div class="ticket-timestamps"><div class="ticket-created">created on: <?= $this->Time->timeAgoInWords($ticket['created']); ?> (<?= $this->Time->niceShort($ticket['created']); ?>)</div><div class="ticket-updated">updated at: <?= $this->Time->timeAgoInWords($ticket['updated']); ?> (<?= $this->Time->niceShort($ticket['updated']); ?>)</div></div>
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
    <div class="comment-text"><?= $textile->process($comment['comment']); ?> <div class="comment-author"> - <? echo($comment['User']['username']); ?> (Status: <? echo($comment['status']); ?>)</div></div>
    <div class="comment-timestamps"><div class="comment-created">posted at: <?= $this->Time->timeAgoInWords($comment['created']); ?> (<?= $this->Time->niceShort($comment['created']); ?>)</div><div class="comment-updated">modified at: <?= $this->Time->timeAgoInWords($comment['updated']); ?> (<?= $this->Time->niceShort($comment['updated']); ?>)</div></div>     
    <ul class="replies">
      <?
        $comment_replies = $comment['CommentReply'];
        foreach($comment_replies as $reply):
      ?>
      <li class="reply">
      <div class="reply-text"><?= $textile->process($reply['reply']); ?> <div class="reply-author">- <? echo($reply['User']['username']); ?></div></div>
      <div class="reply-timestamps"><div class="reply-created">posted at: <?= $this->Time->timeAgoInWords($reply['created']); ?> (<?= $this->Time->niceShort($reply['created']); ?>)</div><div class="reply-updated">modified at: <?= $this->Time->timeAgoInWords($reply['updated']); ?> (<?= $this->Time->niceShort($reply['updated']); ?>)</div></div> 
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


