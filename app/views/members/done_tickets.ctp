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
    <ul class="images">
    <div class="file-list">Attached Files:</div>
    <?
      $images = $ticket['Image'];
      foreach($images as $image):
    ?>
    <li class="image-file"><? echo($this->Html->link($image['name'], "http://s3.amazonaws.com".$image['s3_url'])); ?></li>
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
    <ul class="replies">
      <?
        $comment_replies = $comment['CommentReply'];
        foreach($comment_replies as $reply):
      ?>
      <li class="reply">
      <div class="reply-text"><? echo($reply['reply']); ?></div>
      <div class="reply-author">- <? echo($reply['User']['username']); ?></div>
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


