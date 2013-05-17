<?php $logged_in = $session->read('Auth.User') ?>
<?php $logged_in ? $uaction = 'logout' : $uaction = 'login' ?>
<div class="view toolbar-view" id="top-view">
	<div class="view label-view" id="title"><?php echo $title_for_layout?></div>
	<div class="view label-view" id="current-project"><em style="color:#E6E6E6">Welcome, <? echo($member['Member']['name']); ?>!</em></div>
	<div class="view button-view" id="logout">
	  <div class="button-view-mid">
	    <div class="button-view-label"><?php echo(ucwords($uaction)) ?></div>
	  </div>
	</div>
</div>




<div class="view pre-hide" id="middle-view">
    <div class="view" id="split-view-left">
      <!-- left pane -->
      <ul class="view collection-view" id="project-list">
      
      
      <? foreach($member['Project'] as $project): ?>    
        <li class="col"> <? $sproutmdx->arrow('col'); ?> 
          <span class="root-item" projectid="<?= $project['id'] ?>" onclick="selectProject(this)"><? echo($project['name']); ?></span>
          <ul class="ticket-list">
          <? foreach($project['Ticket'] as $ticket): ?>
            <li ticketid="<? echo($ticket['id']); ?>" onclick="selectTicket(this)">
              #<? echo($ticket['num']); ?>:  <? echo($ticket['name']); ?>
            </li>
          <? endforeach ?>
          </ul>
        </li>
      <? endforeach ?>
      
      
      
      </ul>
    </div>
    <div class="view split-view-vertical-divider" id="divider"></div>
    <div class="view" id="split-view-right">
    
    <!-- right pane -->
      
    </div>
</div>




<div class="view toolbar-view" id="bottom-view">
	<div class="view label-view" id="summary">
	  Projects: <? echo count($member['Project']); ?> <br>
	  Tickets: <? $sproutmdx->ticketCount($member['Project']); ?>
	</div>
</div>


<script>
$(document).ready(function () {  
  splitViewVerticalDraggable(
    $('#middle-view #split-view-left'), 
    $('#middle-view #split-view-right'),
    $('#middle-view #divider') 
  );
  $('#middle-view.pre-hide').removeClass('pre-hide');
  $('#logout').mousedown(function () {
    $('#logout').addClass('active');
  }).mouseup(function () {
    $('#logout').removeClass('active');
	  window.location ="/<?php echo($uaction); ?>";
  });
  $('#logout').mouseleave(function () {
    $('#logout').removeClass('active');
  });
  $('.mark-done-btn').mousedown(function () {
    $('.mark-done-btn').addClass('active');
  }).mouseup(function () {
    $('.mark-done-btn').removeClass('active');
  });
  $('.mark-done-btn').mouseleave(function () {
    $('.mark-done-btn').removeClass('active');
  });
});

var changeTicketStatus = function (me) {
  if(me.children[0].children[0].innerHTML == "Mark Done"){
  options = {url: '/members/mark_as_done/'+me.getAttribute('ticketid'), dataType: 'script', success: function() { me.children[0].children[0].innerHTML = "Not Done"; }};
  $.ajax(options);
  
  } else {
  options = {url: '/members/mark_as_not_done/'+me.getAttribute('ticketid'), dataType: 'script', success: function() { me.children[0].children[0].innerHTML = "Mark Done"; }};
  $.ajax(options);
  }
}

var selectProject = function(project) {
  $('.selected').removeClass('selected'); // unselect
  $('.split-view-right-content').addClass('pre-hide'); // hide all
  $(project).addClass('selected');
  var projectId = project.getAttribute('projectid');
  // ajax and get project info element w/ desc, status message, files
  //alert(projectId);
  options = {url: '/members/project_info/'+projectId, dataType: 'html', success: function(data, textStatus, XMLHttpRequest) {$('#split-view-right').html(data);} };
  $.ajax(options);
}


// refactor me with the new ajax style instead
// just use singular

var selectTicket = function (ticket) {
  $('.selected').removeClass('selected');
  $(ticket).addClass('selected');
  var ticketid = $(ticket).attr('ticketid'); 
  $('#current-project').html( $(ticket).attr('projectname') );
  
  options = {url: '/members/show_ticket/'+ticketid, dataType: 'html', success: function(data, textStatus, XMLHttpRequest) {$('#split-view-right').html(data);} };
  $.ajax(options);
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
</script>
