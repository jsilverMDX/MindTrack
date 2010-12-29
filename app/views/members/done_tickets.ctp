<h1 class="dashboard">Done Tickets</h1>

<div id="work">
<ul class="projects">
  <h3 class="my-projects">By Project: </h3>
  <?
    $projects = $member['Project'];
    foreach($projects as $project):
  ?>
  <li class="project">
  <div class="project-name"><? echo($project['name']); ?></div>
  <div class="project-timestamps"><div class="project-created">created on: <?= $this->Time->timeAgoInWords($project['created']); ?> (<?= $this->Time->niceShort($project['created']); ?>)</div><div class="project-updated">updated at: <?= $this->Time->timeAgoInWords($project['updated']); ?> (<?= $this->Time->niceShort($project['updated']); ?>)</div></div>
  <ul class="tickets">
  <h4 class="my-tickets">Completed Tickets</h4>
    <?
      $tickets = $project['Ticket'];
      foreach($tickets as $ticket):
    ?>
    <?php $tstatus = (strtolower($ticket['status']) == "done") ? "done" : "not done" ?>
    <? if($tstatus == "done") { ?>
    <li class="ticket">
    <h4 class="ticket-header">#<? echo($ticket['id']); ?>:  <? echo($ticket['name']); ?></h4>
    <div class="ticket-status ticket-done-status">
    Status: <? echo($ticket['status']); ?> (<? echo($tstatus); ?>)
    <a href="/members/mark_as_not_done/<? echo($ticket['id']); ?>">Mark as Not Done</a>
    </div>
    <div class="ticket-description"><div class="the-description"><? echo($ticket['description']); ?></div>
    <div class="ticket-timestamps"><div class="ticket-created">created on: <?= $this->Time->timeAgoInWords($ticket['created']); ?> (<?= $this->Time->niceShort($ticket['created']); ?>)</div><div class="ticket-updated">updated at: <?= $this->Time->timeAgoInWords($ticket['updated']); ?> (<?= $this->Time->niceShort($ticket['updated']); ?>)</div></div>
    <ul class="images">
    <div class="file-list">Attached Files:</div>
    <?
      $images = $ticket['Image'];
      foreach($images as $image):
    ?>
    <li class="image-file"><? echo($this->Html->link($image['name'], "http://s3.amazonaws.com".$image['s3_url'])); ?>  - uploaded at <?= $this->Time->timeAgoInWords($image['created']); ?> (<?= $this->Time->niceShort($image['created']); ?>)</li>
    <?
      endforeach;
    ?>
    </ul>
    </div>
    <ul class="comments">
    <?
      $ticket_comments = $ticket['TicketComment'];
      foreach($ticket_comments as $comment):
    ?>
    <li class="comment">
    <div class="comment-text">Comment: <? echo($comment['comment']); ?></div>
    <div class="comment-status">Status: <? echo($comment['status']); ?></div>
    <div class="comment-author">- <? echo($comment['User']['username']); ?></div>
    <div class="comment-timestamps"><div class="comment-created">posted at: <?= $this->Time->timeAgoInWords($comment['created']); ?> (<?= $this->Time->niceShort($comment['created']); ?>)</div><div class="comment-updated">modified at: <?= $this->Time->timeAgoInWords($comment['updated']); ?> (<?= $this->Time->niceShort($comment['updated']); ?>)</div></div> 
    <ul class="replies">
      <?
        $comment_replies = $comment['CommentReply'];
        foreach($comment_replies as $reply):
      ?>
      <li class="reply">
      <div class="reply-text"><? echo($reply['reply']); ?></div>
      <div class="reply-author">- <? echo($reply['User']['username']); ?></div>
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
      }
      endforeach;
    ?>
  </ul>
  </li>
  <?
    endforeach;
  ?>
</ul>

</div>


