<div class="client-welcome">
<p>Welcome, <?php echo($client['name']); ?>!</p>
</div>

<div id="work">
<ul class="projects">
  <h3 class="my-projects">My Projects</h3>
  <?
    $projects = $user['Project'];
    foreach($projects as $project):
  ?>
  <li class="project">
  <div class="project-info">
  <div class="project-name">Project: <? echo($project['name']); ?></div>
  <div class="project-link">Link: <? echo($this->Html->link($project['link'], $project['link'])); ?></div>
  <div class="project-description">Description: <? echo($project['description']); ?></div>
  <div class="project-timestamps"><div class="project-created">created on: <?= $this->Time->timeAgoInWords($project['created']); ?> (<?= $this->Time->niceShort($project['created']); ?>)</div><div class="project-updated">updated at: <?= $this->Time->timeAgoInWords($project['updated']); ?> (<?= $this->Time->niceShort($project['updated']); ?>)</div></div>
  <div class="edit-my-project"><a href="/clients/edit_my_project/<? echo($project['id']); ?>">Edit Project</a></div>
  </div>
  <ul class="statuses">
  <h4 class="status-messages">Project Messages</h4>
  <?
    $statuses = $project['StatusMessage'];
    foreach($statuses as $status):
  ?>
  <li class="status">
  <div class="status-message"><? echo($status['message']); ?> - <? echo($status['User']['username']); ?>  - <?= $this->Time->timeAgoInWords($status['created']); ?></div>
  </li>
  <?
    endforeach;
  ?>
  </ul>
  <ul class="tickets">
  <h4 class="my-tickets">Tickets</h4>
  <div class="new-ticket"><a href="/clients/new_ticket/<? echo($project['id']); ?>">New Ticket</a></div>
    <?
      $tickets = $project['Ticket'];
      foreach($tickets as $ticket):
    ?>
    <?php $tstatus = (strtolower($ticket['status']) == "done") ? "done" : "not done" ?>
    <? if($tstatus != "done") { ?>
    <li class="ticket">
    <div class="ticket-info">
    <h4 class="ticket-header"><a href="/clients/show_ticket/<?= $ticket['id'] ?>">Ticket #<? echo($ticket['id']); ?>: <? echo($ticket['name']); ?></a></h4>
    <div class="ticket-description"><div class="the-description"><?= $textile->process($ticket['description']); ?></div>    <div class="ticket-status">Status: <? echo($ticket['status']); ?> (<?= $tstatus ?>) <a href="/clients/mark_as_done/<? echo($ticket['id']); ?>">Mark as Done</a></div>
    <div class="ticket-timestamps"><div class="ticket-created">created on: <?= $this->Time->timeAgoInWords($ticket['created']); ?> (<?= $this->Time->niceShort($ticket['created']); ?>)</div><div class="ticket-updated">updated at: <?= $this->Time->timeAgoInWords($ticket['updated']); ?> (<?= $this->Time->niceShort($ticket['updated']); ?>)</div></div>
    <div class="edit-ticket"><a href="/clients/edit_ticket/<? echo($ticket['id']); ?>">Edit Ticket</a></div>
    </div>
    </div>
    
    <ul class="images">
    <h3 class="image-files">Files</h3>
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
		    echo $this->Form->hidden('ticket_id', array('value' => $ticket['id']));
		    echo $this->Form->input('status');
	    ?>
    <?php echo $this->Form->end(__('Submit', true));?>
    </div>
    <div class="add-file-form">
    <?php echo $this->Form->create('Image', array('url' => '/clients/add_file_to_ticket', 'enctype' => 'multipart/form-data'));?>
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
    <div class="status-message-form">
    <h4 class="status-header">Post a Project Message</h4>
    <?php echo $this->Form->create('StatusMessage', array('url' => '/clients/post_status_message'));?>
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


