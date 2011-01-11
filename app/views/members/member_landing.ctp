<div class="view toolbar-view" id="top-view">
	<div class="view label-view" id="title"><?php echo $title_for_layout?></div>
</div>




<div class="view" id="middle-view">
    <div class="view" id="split-view-left">
      <ul class="view collection-view" id="project-tree">

      <? foreach($member['Project'] as $project): ?>    
        <li class="col"> <? $sproutmdx->arrow('col'); ?> 

          <span class="root-item"><? echo($project['name']); ?></span>
          <ul>
          <? foreach($project['Ticket'] as $ticket): ?>
            <li>#<? echo($ticket['id']); ?>:  <? echo($ticket['name']); ?></li>
          <? endforeach ?>
          </ul>
        </li>
      <? endforeach ?>

      </ul>
    </div>
    
    <div class="view split-view-vertical-divider" id="divider"></div>
    
    <div class="view" id="split-view-right">
      Need to put the details of the currently selected item in here.
    </div>
</div>




<div class="view toolbar-view" id="bottom-view">
	
</div>


<script>
var toggleExpansion = function (arrow) {
  parent = $(arrow).parent();
  arrow = $(arrow);
  if (parent.attr('class') == 'col') {
    parent.removeClass('col'); parent.addClass('exp'); 
    arrow.removeClass('col'); arrow.addClass('exp')
  } else if (parent.attr('class') == 'exp') {
    parent.removeClass('exp'); parent.addClass('col'); 
    arrow.removeClass('exp'); arrow.addClass('col');
  }
};

var splitViewVerticalDraggable = function (left, right, divider) {
  $('#middle-view #divider').draggable({
    axis: 'x',
    containment: 'parent',
    drag: function (event, ui) {
      divider_loc = divider.css('left');
      left.css('width', divider_loc);
      right.css('left', divider_loc);
    },
    stop: function (event, ui) {
      divider_loc = divider.css('left');
      left.css('width', divider_loc);
      right.css('left', divider_loc);
    }
  }); 
}


$(document).ready(function () {  
  splitViewVerticalDraggable(
    $('#middle-view #split-view-left'), 
    $('#middle-view #split-view-right'),
    $('#middle-view #divider') 
  );
});
</script>
