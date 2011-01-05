<li class="ticket">
<div class="ticket-info">
<h4 class="ticket-header"><a href="/t<?= $ticket['Ticket']['id'] ?>">Ticket #<? echo($ticket['Ticket']['id']); ?>: <? echo($ticket['Ticket']['name']); ?></a></h4>
<div class="ticket-description">Description: <? echo($ticket['Ticket']['description']); ?></div>
<div class="ticket-status">Status: <? echo($ticket['Ticket']['status']); ?> <a href="/clients/mark_as_done/<? echo($ticket['Ticket']['id']); ?>">Mark as Done</a></div>
</div>
<div class="edit-ticket"><a href="/clients/edit_ticket/<? echo($ticket['Ticket']['id']); ?>">Edit Ticket</a></div>
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
  <div class="comment-reply-form">
  <?php echo $this->Form->create('CommentReply', array('url' => '/clients/reply_to_comment'));?>
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
<?php echo $this->Form->create('TicketComment', array('url' => '/clients/add_comment'));?>
  <?php
    echo $this->Form->input('comment');
    echo $this->Form->hidden('user_id', array('value' => $user_id));
    echo $this->Form->hidden('ticket_id', array('value' => $ticket['Ticket']['id']));
    echo $this->Form->input('status');
  ?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="add-file-form">
<?php echo $this->Form->create('Image', array('url' => '/clients/add_file_to_ticket', 'enctype' => 'multipart/form-data'));?>
  <?php
    echo $this->Form->hidden('s3_url');
    echo $this->Form->hidden('Ticket.ticket_id', array('value' => $ticket['Ticket']['id']));
    echo $this->Form->hidden('user_id', array('value' => $user_id));
    echo $this->Form->file('name');
  ?>
  </fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
</ul>
</li>
