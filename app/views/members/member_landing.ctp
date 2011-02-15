<h1 class="dashboard">Main Dashboard</h1>

<div id="member_box">
<p>Welcome, MDX | <?= ($member['Member']['name']); ?>!</p>
<p>You are a <?= ($member['Member']['user_rank']); ?> and have <?= ($member['Member']['karma_points']); ?> points!</p>
</div>

<h3 class="my-projects">My Ticketmaster (<?= count($member['Project'])?> Projects)</h3>

<div id="content">

	<? $projects = $member['Project']; ?>

	<div id="projects">
		<?
			foreach($projects as $project):
		?>
		<div id="<?= $project['name']; ?>-name" class="title"><? echo($project['name']); ?></div>

		<script type="text/javascript">
		$("#<?= $project['name']; ?>-name").click(function()
		{
			$("#blank_project").hide();
			$(".project").hide();
			$("#<?= $project['name']; ?>").toggle();
		});
		</script>
		<? endforeach; ?>
	</div>

	<ul id="project_info">
		<li id="blank_project">Select a project to manage</li>

		<?
			foreach($projects as $project):
		?>

		<li id="<?= $project['name']; ?>" class="project">
			<div class="title"><?= $project['name']; ?> - <?= $project['link'] ?></div>
			<div class="details">
				<div class="created">Started: <?= $this->Time->timeAgoInWords($project['created']); ?> (<?= $this->Time->niceShort($project['created']); ?>)</div>
				<div class="updated">Updated: <?= $this->Time->timeAgoInWords($project['updated']); ?> (<?= $this->Time->niceShort($project['updated']); ?>)</div>
				<div class="description"><?= $project['description'] ?></div>
			</div>

			<div class="title item_head">Messages</div>
			<div class="messages item_body">
				<ul>
					<?
						$statuses = $project['StatusMessage'];
						foreach($statuses as $status):
					?>
					<li class="message">
						<span class="time"><?= $this->Time->timeAgoInWords($status['created']); ?></span> <span class="user"><? echo($status['User']['username']); ?></span> said <span class="content">"<? echo($status['message']); ?>"</span>
					</li>
					<?
						endforeach;
					?>
				</ul>
				<div class="message_form"> 
					<?php echo $this->Form->create('StatusMessage', array('url' => '/members/post_status_message'));?>
						<?php
							echo $this->Form->hidden('project_id', array('value' => $project['id']));
							echo $this->Form->hidden('user_id', array('value' => $user_id));
							echo $this->Form->text('message', array('label' => ""));
						?>
					<?php echo $this->Form->end('Submit');?>
				</div>
			</div>

			<div class="title item_head">Tickets</div>
			<ul class="tickets item_body">
				<?
					$tickets = $project['Ticket'];
					foreach($tickets as $ticket):
				?>
				<div class="title ticket_title">#<? echo($ticket['id']); ?>:  <? echo($ticket['name']); ?></div>
				<li class="ticket ticket_body">
					<div class="status">
						Status: <? echo($ticket['status']); ?>
						<? if ($ticket['status'] != "done") { ?>
						<a href="/members/mark_as_done/<? echo($ticket['id']); ?>">Mark as Done</a>
						<? } ?>
					</div>

					<div class="details">
						<div class="description"><?= $textile->process($ticket['description']); ?></div>
						<div class="created">created on: <?= $this->Time->timeAgoInWords($ticket['created']); ?> (<?= $this->Time->niceShort($ticket['created']); ?>)</div>
						<div class="updated">updated at: <?= $this->Time->timeAgoInWords($ticket['updated']); ?> (<?= $this->Time->niceShort($ticket['updated']); ?>)</div>
					</div>
					
					<div class="title item_head">Attached Images</div>
					<div class="section item_body">
						<ul class="images">
							<?
								$images = $ticket['Image'];
								foreach($images as $image):
							?>
							<li class="image"><? echo($this->Html->link($image['name'], "http://s3.amazonaws.com".$image['s3_url'])); ?> - uploaded at <?= $this->Time->timeAgoInWords($image['created']); ?> (<?= $this->Time->niceShort($image['created']); ?>)</li>
							<?
								endforeach;
							?>
						</ul>
						<div class="form">
							<div class="title item_head">Attach an Image</div>
							<div class="item_body">
								<?php echo $this->Form->create('Image', array('url' => '/members/add_file_to_ticket', 'enctype' => 'multipart/form-data'));?>
									<?php
										echo $this->Form->hidden('s3_url');
										echo $this->Form->hidden('Ticket.ticket_id', array('value' => $ticket['id']));
										echo $this->Form->hidden('user_id', array('value' => $user_id));
										echo $this->Form->file('name');
									?>
								<?php echo $this->Form->end(__('Submit', true));?>
							</div>
						</div>
					</div>
					
					<div class="title item_head">Comments</div>
					<div class="section item_body">
						<ul class="comments">
							<?
								$ticket_comments = $ticket['TicketComment'];
								foreach($ticket_comments as $comment):
							?>
							<li class="comment">
								<div class="text"><?= $textile->process($comment['comment']); ?></div>
								<div class="author"> - <? echo($comment['User']['username']); ?> (Status: <? echo($comment['status']); ?>)</div>
								<div class="created">posted at: <?= $this->Time->timeAgoInWords($comment['created']); ?> (<?= $this->Time->niceShort($comment['created']); ?>)</div>
								<div class="updated">modified at: <?= $this->Time->timeAgoInWords($comment['updated']); ?> (<?= $this->Time->niceShort($comment['updated']); ?>)</div>
								<ul class="replies">
									<?
										$comment_replies = $comment['CommentReply'];
										foreach($comment_replies as $reply):
									?>
									<li class="reply">
										<div class="text"><?= $textile->process($reply['reply']); ?></div>
										<div class="author">- <? echo($reply['User']['username']); ?></div>
										<div class="created">posted at: <?= $this->Time->timeAgoInWords($reply['created']); ?> (<?= $this->Time->niceShort($reply['created']); ?>)</div>
										<div class="updated">modified at: <?= $this->Time->timeAgoInWords($reply['updated']); ?> (<?= $this->Time->niceShort($reply['updated']); ?>)</div> 
									</li>
									<?
										endforeach;
									?>
								</ul>
								<div class="title item_head">Post a reply</div>
								<div class="form item_body">
									<?php echo $this->Form->create('CommentReply', array('url' => '/members/reply_to_comment'));?>
										<?php
											echo $this->Form->textarea('reply', array('label' => ""));
											echo $this->Form->hidden('ticket_comment_id', array('value' => $comment['id']));
											echo $this->Form->hidden('user_id', array('value' => $user_id));
										?>
									<?php echo $this->Form->end('Submit');?>
								</div>
							</li>
							<?
								endforeach;
							?>
						</ul>
						<div class="title item_head">Post a comment</div>
						<div class="form item_body">
							<?php echo $this->Form->create('TicketComment', array('url' => '/members/add_comment'));?>
								<?php
									echo $this->Form->input('comment');
									echo $this->Form->hidden('user_id', array('value' => $user_id));
									echo $this->Form->hidden('ticket_id', array('value' => $ticket['id']));
									echo $this->Form->input('status');
								?>
							<?php echo $this->Form->end(__('Submit', true));?>
						</div>
					</div>
				</li>
				<?
					endforeach;
				?>
			</ul>
		</li>
		<?
			endforeach;
		?>
	</ul>
</div>

<script type="text/javascript">
$(document).ready(function()
{
  //hide the all of the element with class item_body
  $(".item_body").hide();

	//hide the projects
	$(".project").hide();

	//hide the tickets
	$(".ticket_body").hide();

  //toggle the componenet with class item_body
  $(".item_head").click(function()
  {
    if ($(this).css('background-image').match(/redplus.png/))
      $(this).css('background-image', 'url("/img/greenminus.png")');
    else
      $(this).css('background-image', 'url("/img/redplus.png")');
    $(this).next(".item_body").slideToggle(100);
  });

  //toggle the componenet with class item_body
  $(".ticket_title").click(function()
  {
		$(".ticket_body").hide();
    $(this).next(".ticket_body").toggle();
  });
});
</script>

