<div id="work">
<ul class="projects">
  <?
    $projects = $user['Project'];
    foreach($projects as $project):
  ?>
  <li class="project">
  <div class="project-info">
  <h1 class="project-name"><? echo($project['name']); ?></h1>
  </div>
  <ul class="tickets">
  <div class="new-ticket"><a href="/clients/new_ticket/<? echo($project['id']); ?>">New Ticket</a></div>
  <div style="clear: both"></div>
    <?
      $tickets = $project['Ticket'];
      foreach($tickets as $ticket):
    ?>
    <?php $tstatus = (strtolower($ticket['status']) == "done") ? "done" : "not done" ?>
    <? if($tstatus != "done") { ?>
    <li class="ticket">
    <div class="ticket-info">
    <h4 class="ticket-header"><a href="/t/<?= $project['name'] ?>/<?= $ticket['num'] ?>">#<? echo($ticket['num']); ?>: <? echo($ticket['name']); ?></a></h4>
    <div class="ticket-description"><div class="the-description"><?= $textile->process($ticket['description']); ?></div>    <div class="ticket-status"><? echo($ticket['status']); ?> (<?= $tstatus ?>) <a href="/clients/mark_as_done/<? echo($ticket['id']); ?>">Mark as Done</a></div>
    <div class="edit-ticket"><a href="/clients/edit_ticket/<? echo($ticket['id']); ?>">Edit Ticket</a></div>

    <div class="ticket-timestamps"><div class="ticket-created">created: <?= $this->Time->timeAgoInWords($ticket['created']); ?> (<?= $this->Time->niceShort($ticket['created']); ?>)</div><div class="ticket-updated">modified: <?= $this->Time->timeAgoInWords($ticket['updated']); ?> (<?= $this->Time->niceShort($ticket['updated']); ?>)</div></div>
    </div>
    </div>
    
    <ul class="images">
    <?
      $images = $ticket['Image'];
      foreach($images as $image):
    ?>
    <li><? echo($this->Html->link($image['name'], "http://s3.amazonaws.com".$image['s3_url'])); ?> - uploaded at <?= $this->Time->timeAgoInWords($image['created']); ?> (<?= $this->Time->niceShort($image['created']); ?>)</li>
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
    <div class="comment-text"><?= $textile->process($comment['comment']); ?> <div class="comment-author"> - <? echo($comment['User']['username']); ?> (Status: <? echo($comment['status']); ?>)</div>
    <div class="comment-timestamps"><div class="comment-created">posted: <?= $this->Time->timeAgoInWords($comment['created']); ?> (<?= $this->Time->niceShort($comment['created']); ?>)</div><div class="comment-updated">modified: <?= $this->Time->timeAgoInWords($comment['updated']); ?> (<?= $this->Time->niceShort($comment['updated']); ?>)</div></div>     
    </div>
    <ul class="replies">
      <?
        $comment_replies = $comment['CommentReply'];
        foreach($comment_replies as $reply):
      ?>
      <li class="reply">
      <div class="reply-text"><?= $textile->process($reply['reply']); ?> <div class="reply-author">- <? echo($reply['User']['username']); ?></div>
      <div class="reply-timestamps"><div class="reply-created">posted: <?= $this->Time->timeAgoInWords($reply['created']); ?> (<?= $this->Time->niceShort($reply['created']); ?>)</div><div class="reply-updated">modified: <?= $this->Time->timeAgoInWords($reply['updated']); ?> (<?= $this->Time->niceShort($reply['updated']); ?>)</div></div>       
      </div>
      </li>
      <?
        endforeach;
      ?>
      <div class="reply-form-holder">
      <a onclick="$(this).parent().children('.comment-reply-form').show();$(this).hide();">Post Reply</a>
      <div class="comment-reply-form">
      <?php echo $this->Form->create('CommentReply', array('url' => '/clients/reply_to_comment'));?>
	      <?php
		      echo $this->Form->textarea('reply', array('label' => ""));
		      echo $this->Form->hidden('ticket_comment_id', array('value' => $comment['id']));
		      echo $this->Form->hidden('user_id', array('value' => $user_id));
	      ?>
      <?php echo $this->Form->end('Reply');?>
      </div>
      </div>
    </ul>
    </li>
    <?
      endforeach;
    ?>
    <div class="comment-form-holder">
    <a onclick="$(this).parent().children('.create-comment-form').show();$(this).hide();">Create Comment</a>
    <div class="create-comment-form">
    <?php echo $this->Form->create('TicketComment', array('url' => '/clients/add_comment'));?>
	    <?php
		    echo $this->Form->input('comment');
		    echo $this->Form->hidden('user_id', array('value' => $user_id));
		    echo $this->Form->hidden('ticket_id', array('value' => $ticket['id']));
		    echo $this->Form->input('status');
	    ?>
    <?php echo $this->Form->end(__('Post', true));?>
    </div>
    </div>
    <div class="file-form-holder">
    <a onclick="$(this).parent().children('.add-file-form').show();$(this).hide();">Upload File</a>

    <div class="add-file-form">
    <?php echo $this->Form->create('Image', array('url' => '/clients/add_file_to_ticket', 'enctype' => 'multipart/form-data'));?>
	    <?php
	      echo $this->Form->hidden('s3_url');
	      echo $this->Form->hidden('Ticket.ticket_id', array('value' => $ticket['id']));
		    echo $this->Form->hidden('user_id', array('value' => $user_id));
		    echo $this->Form->file('name');
	    ?>
    <?php echo $this->Form->end(__('Upload', true));?>
    </div>
    </div>
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


