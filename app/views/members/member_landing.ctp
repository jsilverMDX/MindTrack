<div class="view toolbar-view" id="top-view">
	<div class="view label-view" id="title"><?php echo $title_for_layout?></div>
</div>




<div class="view pre-hide" id="middle-view">
    <div class="view" id="split-view-left">
      <ul class="view collection-view" id="project-list">

      <? foreach($member['Project'] as $project): ?>    
        <li class="col"> <? $sproutmdx->arrow('col'); ?> 
          <span class="root-item"><? echo($project['name']); ?></span>
          <ul class="ticket-list">
          <? foreach($project['Ticket'] as $ticket): ?>
            <li ticketid="<? echo($ticket['id']); ?>" onclick="selectTicket(this)">
              #<? echo($ticket['id']); ?>:  <? echo($ticket['name']); ?>
            </li>
          <? endforeach ?>
          </ul>
        </li>
      <? endforeach ?>

      </ul>
    </div>
    
    <div class="view split-view-vertical-divider" id="divider"></div>
    
    <div class="view" id="split-view-right">
      <? foreach($member['Project'] as $project): ?>    
          <? foreach($project['Ticket'] as $ticket): ?>
            <div class="split-view-right-content pre-hide" projectid="<? echo($project['id']); ?>" id="ticket-<? echo($ticket['id']); ?>">
              <h1><? echo($project['name']); ?></h1>
              <h2>#<? echo($ticket['id']); ?>:  <? echo($ticket['name']); ?></h2>
          
            </div>
          <? endforeach ?>
      <? endforeach ?>
    </div>
</div>




<div class="view toolbar-view" id="bottom-view">
	
</div>


<script>
var selectTicket = function (ticket) {
  $('.selected').removeClass('selected');
  $('.split-view-right-content').addClass('pre-hide');
  $(ticket).addClass('selected')
  var ticketid = $(ticket).attr('ticketid'); 
  $('#ticket-'+ticketid).removeClass('pre-hide');
}

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
  $('#middle-view.pre-hide').removeClass('pre-hide');
});
</script>
