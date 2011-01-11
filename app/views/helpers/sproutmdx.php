<?php 
class SproutmdxHelper extends AppHelper {

  function arrow($str) { 
    echo "<div class=\"arrow " . $str . "\" onclick=\"toggleExpansion(this)\"></div>";
  }
  
  function ticketCount($projects) {
    $num = 0;
    foreach($projects as $project):
      $num+=count($project['Ticket']);
    endforeach;
    echo $num;
  }
  
}
?>
