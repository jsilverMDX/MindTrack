<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Buda:light' rel='stylesheet' type='text/css'>
<script src='http://code.jquery.com/jquery-1.4.2.min.js' type='text/javascript'>
</script>
<link rel="stylesheet" href="/css/mindynamics.css" type="text/css" media="screen" charset="utf-8" />
<?php echo $scripts_for_layout ?>
<!--[if IE 7]>
<style type="text/css" media="screen">
  #inner_right_pane #top form {position:relative;top:-15px;}
  div#menu ul li a {padding: 0 26px;position:relative;top:7px;}
</style>
<![endif]-->
</head>
<body>
</div>
<div id="container">
	<div id="header" class='box_shadow'>
		<div id="header_accent">
		<div id="logo">
		<img src="/img/logo.png" />
		<em id='slogan'>awesome programming services</em>
		</div>
		<div id="header_links">
	    	<ul>
	      		<?php $logged_in = $session->read('Auth.User') ?>
	      		<?php $logged_in ? $uaction = 'logout' : $uaction = 'login' ?>
	      		<li id="login"><a href="/<?php echo($uaction); ?>"><?php echo(ucwords($uaction)) ?></a></li>
	    	</ul>
		</div>
		</div>
	</div>
	
	<script>
	$(document).ready(function (){
		$('#login').mouseover(function (){
			$('#login').css('background-image', "url('/img/login_button_flip.png')");
		});
		$('#login').mouseout(function (){
			$('#login').css('background-image', "url('/img/login_button.png')");
		});
	});
	</script>
	
	<div id="finish" class='box_shadow'>
		<div id="menu">
			<div id="wrapper_menu">
			<ul>
					<?php
					if(isset($nav_items)) {
					  foreach ($nav_items as $page):
	            echo "<li><a href=\"/_" . $page['Page']['name'] . "\">" . $page['Page']['name'] . "</a></li>";
	        	endforeach;
					}
	      	?>
				</ul>
			</div>
		</div>
		<br>
		
		<div id="main_content">
		<?php echo $content_for_layout; ?>
		</div>
		
	</div>
	
	<div id="footer" class='box_shadow'>
		<div id="footer_accent">
			<div class="footer_text">
		      <div class="footer_para">All content on this site and ideas and intellectual property
		      contained herein are property of Mindynamics and may not be used elsewhere without
		      express written permission of the authors. &copy; Mindynamics 2011</div>
		    </div>
		</div>
	</div>
</div>
</body>
</html>
