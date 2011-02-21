<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Buda:light' rel='stylesheet' type='text/css'>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
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
	
	<div id="main_content">
	<ul id="client-links">
	<li><a href="/mdx_clients">Main Dashboard</a></li>
	<li><a href="/clients/done_tickets">Completed Tickets</a></li>
  <li><a href="/clients/doc_store">Document Store</a></li>
	<li><a href="/clients/my_invoices">My Invoices</a></li>
	
	</ul>
	
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
