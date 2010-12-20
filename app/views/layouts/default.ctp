<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
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
<div id="container">
	<div id="header">
		<div id="menu">
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="#">Info</a></li>
				<li><a href="#">Clients</a></li>
				<li><a href="#">Jobs</a></li>
				<li class="last"><a href="#">About</a></li>
			</ul>
		</div>
	</div>

	<div id="main_content">	
    <?php echo $content_for_layout ?>
	</div>


	<div style="clear: both"></div>
  <div id="footer">
    <div class="footer_text">
      <div class="footer_para">Mindynamics &copy; 2010</div>
    </div>
  </div>
</div>
</body>
</html>
