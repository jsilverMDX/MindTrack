  <h3 class="my-projects">Document Stores for My Projects</h3>
  <?
    foreach($projects as $project):
  ?>
   <div class="project-name">Project: <? echo($project['name']); ?></div>
  
    <ul class="images">
    <h3 class="image-files">Files</h3>
    <?
      $images = $project['Image'];
      foreach($images as $image):
    ?>
    <li><? echo($this->Html->link($image['name'], "http://s3.amazonaws.com".$image['s3_url'])); ?> - uploaded at <?= $this->Time->timeAgoInWords($image['created']); ?> (<?= $this->Time->niceShort($image['created']); ?>)</li>
    <?
      endforeach;
    ?>
    </ul>
    
    
    <div class="add-file-form">
    <?php echo $this->Form->create('Image', array('url' => '/members/add_file_to_project', 'enctype' => 'multipart/form-data'));?>
      <?php
        echo $this->Form->hidden('s3_url');
        echo $this->Form->hidden('Project.project_id', array('value' => $project['id']));
        echo $this->Form->hidden('user_id', array('value' => $user_id));
        echo $this->Form->file('name');
      ?>
      </fieldset>
    <?php echo $this->Form->end(__('Submit', true));?>
    </div>
    
  <?
    endforeach;
  ?>
