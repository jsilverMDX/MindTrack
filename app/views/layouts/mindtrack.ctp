<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Buda:light' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/css/mindtrack.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" src="/js/jquery.min.js"></script> 
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
      <h3 class="mindtrack">MindTrack</h3>
		</div>
		<div id="header_links">
	    <ul>
	      <?php $logged_in = $session->read('Auth.User') ?>
	      <?php $logged_in ? $uaction = 'logout' : $uaction = 'login' ?>
	      <li><a href="/<?php echo($uaction); ?>"><?php echo(ucwords($uaction)) ?></a></li>
	    </ul>
		</div>
		</div>

	</div>
	
	<div class="member-nav">
  <ul>
  <li><a href="/mdx_members">Dashboard</a></li>
  <li><a href="/members/done_tickets">Done Tickets</a></li>
  <li><a href="/members/ticket_master">Assign Tickets</a></li>
  <li><a href="/members/my_tickets">My Tickets</a></li>
  <li><a href="/members/doc_store">Doc Store</a></li>
  <li><a href="/members/track_time">Track Time</a></li>
  </ul>
  </div>
	
	<div id="main_content">	
	<?php echo $content_for_layout; ?>
	</div>
		
	<div id="footer" class='box_shadow'>
		<div id="footer_accent">
			<div class="footer_text">
		      <div class="footer_para">Mindynamics &copy; 2010</div>
		    </div>
		</div>
	</div>
</div>
</body>
</html>
