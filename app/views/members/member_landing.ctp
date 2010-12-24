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
  <div class="project-client">Client: <? echo($project['User']['Client']['name']); ?></div>
  <ul class="statuses">
  <h4 class="status-messages">Status Messages</h4>
  <?
    $statuses = $project['StatusMessage'];
    foreach($statuses as $status):
  ?>
  <li class="status">
  <div class="status-message"><? echo($status['message']); ?></div>
  <div class="status-author">posted by <? echo($status['User']['username']); ?></div>
  </li>
  <?
    endforeach;
  ?>
  </ul>
  <ul class="tickets">
  <h4 class="my-tickets"><? echo($project['name']); ?> Tickets</h4>
    <?
      $tickets = $project['Ticket'];
      foreach($tickets as $ticket):
    ?>
    <li class="ticket">
    <h4 class="ticket-header">Ticket #<? echo($ticket['id']); ?></h4>
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
    <?php echo $this->Form->create('TicketComment', array('url' => '/clients/add_comment'));?>
	    <?php
		    echo $this->Form->input('comment');
		    echo $this->Form->hidden('user_id', array('value' => $user_id));
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
    <div class="status-message-form">
    <h4 class="status-header">Post a Status Message</h4>
    <?php echo $this->Form->create('StatusMessage', array('url' => '/members/post_status_message'));?>
      <?php
        echo $this->Form->textarea('message', array('label' => ""));
        echo $this->Form->hidden('project_id', array('value' => $project['id']));
        echo $this->Form->hidden('user_id', array('value' => $user_id));
      ?>
    <?php echo $this->Form->end('Submit');?>
    </div>
  </ul>
  </li>
  <?
    endforeach;
  ?>
</ul>

</div>


