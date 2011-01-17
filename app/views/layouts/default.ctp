<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/css/mindynamics.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" src="/js/default.js"></script>
<?php echo $scripts_for_layout ?>
</head>
<body>

<div id="container">
  <div id="top">
    <img id="logo" src="/img/logo.gif"/>
    <div id="topright">
      Collaborative Web Development Agency
      <div class="tech-icon" id="linux"></div>
      <div class="tech-icon" id="rails"></div>
      <div class="tech-icon" id="cakephp"></div>
      <div class="tech-icon" id="wordpress"></div>
      <div class="tech-icon" id="drupal"></div>   
    </div>
    <div id="root"></div>
  </div>
  
  <div id="main">
<iframe id="gtalkbadge" src="http://www.google.com/talk/service/badge/Show?tk=z01q6amlqqvh10gv8qpo4qqegnh1811j9flrtt8itvss84e96v5p2eqmu27q90bn3uvh6it4rv06tpou2vhcakh86omjfnigt33e090153267i52oovr88trgk0f1898lga969in5kl8fka4vnp858g2scb39rhuijq5vk7qg5t0l47c9ds3sl0doarqmp0hrlo&amp;w=159&amp;h=36" frameborder="0" allowtransparency="true" width="159" height="36"></iframe>
    <div id="topleft">
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
    <div id="topright">
      We are a group of ethical hackers that will <strong>finally</strong> make your web application
      <strong>bend to your will</strong>, no matter what state the other developers left it in or what
      technology it relies on. We will <strong>care for your app as you deserve</strong> -- period.
    </div>
    <div id="nav">
      <ul>
         	<?php
					if(isset($nav_items)) {
					  foreach ($nav_items as $page):
					    $li_class = ($page['Page']['name'] == $page_name) ? 'selected' : $page['Page']['name'];
	            echo '<li class="' . $li_class . '"><a href="_' . $page['Page']['name'] . '">' . $page['Page']['name'] . '</a></li>';
	        	endforeach;
					}
	      	?>
      </ul>
    </div>
    <div id="maincontent">
      <?php echo $content_for_layout; ?>
    </div>
    <div style="clear:both"></div>
  </div>
</div>


</body>
</html>
