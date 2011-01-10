<div class="view toolbar-view" id="top-view">
	<div class="view label-view" id="title"><?php echo $title_for_layout?></div>
</div>



<div class="view" id="middle-view">

    <div class="view" id="split-view-left">
    
    </div>
    
    <div class="view split-view-vertical-divider" id="divider"></div>
    
    
    <div class="view" id="split-view-right">
    
    </div>

</div>




<div class="view toolbar-view" id="bottom-view">
	
</div>


<script>
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
