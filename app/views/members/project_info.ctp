<style>
li {
  list-style-type: none;
}
.project-name {
  font-size: 14pt;
}

</style>

<div class="split-view-right-content">
<div class="project-name item_head"><? echo($project['Project']['name']); ?></div>
<li class="project item_body">
<div class="project-timestamps"><div class="project-created">created on: <?= $this->Time->timeAgoInWords($project['Project']['created']); ?> (<?= $this->Time->niceShort($project['Project']['created']); ?>)</div><div class="project-updated">updated at: <?= $this->Time->timeAgoInWords($project['Project']['updated']); ?> (<?= $this->Time->niceShort($project['Project']['updated']); ?>)</div></div>
<div class="item_head">Project Messages</div>
<ul class="statuses item_body">
  <h4 class="status-messages">Project Messages</h4>
  <h4 class="status-header item_head">New Project Message</h4>
  <div class="status-message-form item_body"> 
    <?php echo $this->Form->create('StatusMessage', array('url' => '/members/post_status_message'));?>
      <?php
        echo $this->Form->hidden('project_id', array('value' => $project['Project']['id']));
        echo $this->Form->hidden('user_id', array('value' => $user_id));
        echo $this->Form->text('message', array('label' => ""));
      ?>
    <?php echo $this->Form->end('Submit');?>
  </div>
  <?
    $statuses = $project['StatusMessage'];
    foreach($statuses as $status):
  ?>
  <li class="status">
    <div class="status-message"><? echo($status['message']); ?> - <? echo($status['User']['username']); ?> - <?= $this->Time->timeAgoInWords($status['created']); ?></div>
  </li>
  <?
    endforeach;
  ?>
</ul>
</div>
