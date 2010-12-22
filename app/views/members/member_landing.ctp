<div class="member">
<p>Hello, <?php echo($user['Member']['name']); ?>!</p>
<p>You are a <?php echo($user['Member']['user_rank']); ?> and have <?php echo($user['Member']['karma_points']); ?> points!</p>
</div>

<div id="work">
<h1 class="work-heading">My Work</h1>

<div id="work-projects">
<h3 class="work-subheading">By Project</h3>
<?
  $projects = $user['Member']['Project'];
  foreach($projects as $project):
?>
<div class="project">
<div class="project-name"><? echo($project['name']); ?></div>
</div>
<?
  endforeach;
?>
</div>

</div>


