<?php 
class SproutmdxHelper extends AppHelper {

  function arrow($str) { 
    echo "<div class=\"arrow " . $str . "\" onclick=\"toggleExpansion(this)\"></div>";
  }
  
}
?>
