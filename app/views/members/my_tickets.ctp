<h1>My Tickets</h1>

<div class="member">
<p>Hello, <?php echo($member['Member']['name']); ?>!</p>
<p>You are a <?php echo($member['Member']['user_rank']); ?> and have <?php echo($member['Member']['karma_points']); ?> points!</p>
</div>


  
<ul class="tickets">
  <?
    $tickets = $member['Ticket'];
    foreach($tickets as $ticket):
  ?>
  <h4 class="my-tickets"><? echo($ticket['Project']['name']); ?> Tickets</h4>
  <?php $tstatus = (strtolower($ticket['status']) == "done") ? "done" : "not done" ?>
  <? if($tstatus != "done") { ?>
  <li class="ticket">
  <h4 class="ticket-header">#<? echo($ticket['id']); ?>:  <? echo($ticket['name']); ?></h4>
  <div class="ticket-status">
  Status: <? echo($ticket['status']); ?> (<? echo($tstatus); ?>)
  <a href="/members/mark_as_done/<? echo($ticket['id']); ?>">Mark as Done</a>
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
    <div class="comment-reply-form">
    <div class="post-reply">Post a reply</div>
    <?php echo $this->Form->create('CommentReply', array('url' => '/members/reply_to_comment'));?>
      <?php
	      echo $this->Form->textarea('reply', array('label' => ""));
	      echo $this->Form->hidden('ticket_comment_id', array('value' => $comment['id']));
	      echo $this->Form->hidden('user_id', array('value' => $user_id));
      ?>
    <?php echo $this->Form->end('Submit');?>
    </div>
  </ul>
  </li>
  <?
    endforeach;
  ?>
  <div class="create-comment-form">
  <div class="post-comment">Post a comment</div>
  <?php echo $this->Form->create('TicketComment', array('url' => '/members/add_comment'));?>
    <?php
	    echo $this->Form->input('comment');
	    echo $this->Form->hidden('user_id', array('value' => $user_id));
	    echo $this->Form->hidden('ticket_id', array('value' => $ticket['id']));
	    echo $this->Form->input('status');
    ?>
  <?php echo $this->Form->end(__('Submit', true));?>
  </div>
  <div class="add-file-form">
  <div class="attach">Attach a file</div>
  <?php echo $this->Form->create('Image', array('url' => '/members/add_file_to_ticket', 'enctype' => 'multipart/form-data'));?>
    <?php
      echo $this->Form->hidden('s3_url');
      echo $this->Form->hidden('Ticket.ticket_id', array('value' => $ticket['id']));
	    echo $this->Form->hidden('user_id', array('value' => $user_id));
	    echo $this->Form->file('name');
    ?>
    </fieldset>
  <?php echo $this->Form->end(__('Submit', true));?>
  </div>
  </ul>
  </li>
  <?
    }
    endforeach;
  ?>
</ul>

