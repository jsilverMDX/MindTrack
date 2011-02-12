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
	<script>
	$(document).ready(function(){
		hovereffect1();
		choose();
	});
	</script>
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
  
<iframe id="gtalkbadge" src="http://www.google.com/talk/service/badge/Show?tk=z01q6amlqqvh10gv8qpo4qqegnh1811j9flrtt8itvss84e96v5p2eqmu27q90bn3uvh6it4rv06tpou2vhcakh86omjfnigt33e090153267i52oovr88trgk0f1898lga969in5kl8fka4vnp858g2scb39rhuijq5vk7qg5t0l47c9ds3sl0doarqmp0hrlo&amp;w=159&amp;h=36" frameborder="0" allowtransparency="true" width="159" height="36"></iframe>
<div id="pointer_box"></div>
<div id="menu">
  <ul id="menuitems">
         	<?php
         	$current_page = substr ($this->here, 2);
          
          $navitems = array('incubation', 'training', 'portfolio', 'squad');
          
          foreach ($navitems as $str):
            $li_class = ($str == $current_page) ? ' class="selected"' : '';
            echo '<li' . $li_class . '><a href="_' . $str . '">' . $str . '</a></li>';
          endforeach;
	      	?>
		<script>
		function choose(){
			current = "<?php echo $current_page; ?>";
			switch(current){
				case 'incubation': $("#pointer_box").css('background-position', '34%'); break;
				case 'training': $("#pointer_box").css('background-position', '46%'); break;
				case 'portfolio': $("#pointer_box").css('background-position', '57.2%'); break;
				case 'squad': $("#pointer_box").css('background-position', '67.5%'); break;
				default: $("#pointer_box").css('background', '#FED351'); break;
			}
		};
		</script>
  </ul>
</div>

<div id="blurb">
	<div style="padding:0px 5%;">
		<?php echo $content_for_layout; ?>
  </div>
</div>
	
<div id="contact"><a href='mailto&#58;%6A&#115;&#105;lve&#114;&#64;&#109;i%6Edy%&#54;Eam&#105;&#37;&#54;3&#115;&#46;%6&#51;&#111;&#37;6D'>mash here to contact us?</a></div>
<div id="footer">&copy; 2011 mindynamics Inc.</div>	

<script>
$(window).load(function () {
  $('#blurb').css('min-height', $(window).height()-262);
});
</script>

</body></html>	    	





