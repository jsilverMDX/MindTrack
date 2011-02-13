<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/css/mindynamics.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" src="/js/default.js"></script>
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script src="/js/hovereffect1.js" type="text/javascript" charset="utf-8"></script>

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
	  <div id="logo" title="mindynamics" onclick="window.location='/'">
		  <div id="tagline"><h2>collaborative web & mobile application development</h2></div>
	  </div>
  </div>
  
<iframe id="gtalkbadge" style="z-index:2" src="http://www.google.com/talk/service/badge/Show?tk=z01q6amlqulpe3m58tvc3f257ns90ofpcm9701n1cklb4hg0e23evn4nm19bedu901u206g1t7io8k60uektu0hnbgb8qd77o5bs98e5m2ut447dcb9mmvda841aevaj05udocubrvnkhoq6u9pfpe43b22k9mgga9s0b1bkc8g7aavf3le7u6ohei8s86h2e2s&amp;w=159&amp;h=36" frameborder="0" allowtransparency="true" width="159" height="36"></iframe>

<div id="menu">
  <ul id="menuitems">
   	<?php 
   	// set, in order, which pages you want on the menu:
    $nav_items = array('incubation', 'training', 'portfolio', 'squad');
    if ($this->params['controller'] == 'pages') {
      foreach ($nav_items as $name):
        $li_class = ($name == $current_page) ? ' class="selected"' : '';
        echo '<li' . $li_class . '><a href="_' . $name . '">' . $name . '</a></li>';
      endforeach;
    }
  	?>
  </ul>
</div>

<div id="blurb">
	<div class="contentwrap">
		<?php echo $content_for_layout; ?>
  </div>
</div>
	
<div id="contact"><a href='mailto&#58;%6A&#115;&#105;lve&#114;&#64;&#109;i%6Edy%&#54;Eam&#105;&#37;&#54;3&#115;&#46;%6&#51;&#111;&#37;6D'>mash here to contact us?</a></div>
<div id="footer">&copy; 2011 mindynamics Inc.</div>	

<script>
$(window).load(function () {
  $('#blurb').css('min-height', $(window).height()-262);
  // $('#header, #menu').mouseenter(function () {
  //   $('#menu').show();
  // }).mouseleave(function () {
  //   $('#menu').hide();
  // });
});
</script>

</body></html>	    	





