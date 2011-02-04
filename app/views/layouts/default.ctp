<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/css/mindynamics.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" src="/js/default.js"></script>
<script type="text/javascript" src="/js/jquery.min.js"></script>
<?php echo $scripts_for_layout ?>
</head>
<body>
  
  <div id="header">
  	<div id="login">
  	  <ul>
    		<?php $logged_in = $session->read('Auth.User') ?>
    		<?php $logged_in ? $uaction = 'logout' : $uaction = 'login' ?>
    		<? if($logged_in) { ?>
    		Welcome back, <?= $logged_in['username'] ?>
    		<? } ?>
    		<? if($logged_in && $logged_in['group_id'] == 1) { ?>
    		<li class="login"><a href="/mdx_admin">Dashboard</a></li>
    		<? } elseif($logged_in && $logged_in['group_id'] == 2) { ?>
    		<li class="login"><a href="/mdx_members">Dashboard</a></li>
    		<? } elseif($logged_in && $logged_in['group_id'] == 3) { ?>
    		<li class="login"><a href="/mdx_clients">Dashboard</a></li>
    		<? } ?>
      	<li class="login"><a href="/<?php echo($uaction); ?>"><?php echo(ucwords($uaction)) ?></a></li>
	    </ul>
  	</div>
	  <div id="logo" title="mindynamics">
		  <div id="tagline"><h2>a collaborative web development agency</h2></div>
	  </div>
  </div>
  
  
  
<iframe id="gtalkbadge" src="http://www.google.com/talk/service/badge/Show?tk=z01q6amlqqvh10gv8qpo4qqegnh1811j9flrtt8itvss84e96v5p2eqmu27q90bn3uvh6it4rv06tpou2vhcakh86omjfnigt33e090153267i52oovr88trgk0f1898lga969in5kl8fka4vnp858g2scb39rhuijq5vk7qg5t0l47c9ds3sl0doarqmp0hrlo&amp;w=159&amp;h=36" frameborder="0" allowtransparency="true" width="159" height="36"></iframe>





	    	
	    	
	    	
<div id="menu">
  <ul id="menuitems">
         	<?php
					if(isset($nav_items)) {
					  foreach ($nav_items as $page):
					    $li_class = ($page['Page']['name'] == $page_name) ? 'selected' : $page['Page']['name'];
	            echo '<li><a href="_' . $page['Page']['name'] . '">' . $page['Page']['name'] . '</a></li>';
	        	endforeach;
					}
	      	?>
  </ul>
</div>

<div id="blurb">
	
	
	
	<div class="prelist">
	What can we do? Well, for starters...
</div>


	
	
	
	
	
	<?php echo $content_for_layout; ?>
	
</div>
	<div id="contact"><a href="mailto:jsilver@mindynamics.com">mash here to contact us?</a></div>
<div id="footer">
&copy; 2011 mindynamics Inc.
</div>	

</body></html>	    	





