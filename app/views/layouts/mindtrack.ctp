<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Buda:light' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/css/mindtrack-project.css" type="text/css" media="screen" charset="utf-8" />
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<?php echo $scripts_for_layout ?>
</head>
<body>
  <?php $logged_in = $session->read('Auth.User') ?>
  <?php $logged_in ? $uaction = 'logout' : $uaction = 'login' ?>

	<div class="mindtrack">

		<div class="title_bar">
			<h1>Mindtrack Dashboard</h1>
			<a href="/<? echo $uaction ?>"><?php echo(ucwords($uaction)) ?></a>
		</div>

		<div class="menu_bar">
			<h2><?= $this->Html->link('Home', array('controller' => 'members', 'action' => 'member_landing')); ?></h2>
			<h2 class="menu_projects">Projects</h2>
			<ul class="projects">
			<?
				$projs = $projects;
				foreach($projs as $proj):
			?>

			<li>
				<?= $this->Html->link($proj['Project']['name'], array('controller' => 'members', 'action' => 'member_project', $proj['Project']['id'], "main")); ?>
			</li>


			<? endforeach; ?>
			</ul>
		</div>

		<?php echo $content_for_layout; ?>

	</div>


<script type="text/javascript">
$(document).ready(function()
{
	// Position the projects menu
	var located = $(".menu_projects").position();
	$(".projects").offset({ left: located.left, top: located.top + ($(".menu_projects").outerHeight() * 1.5) + 2 });

	//Toggle the project menu
	$(".menu_projects").click(function()
	{
		$(".projects").slideToggle(100);
	});
});
</script>

</body>
</html>
