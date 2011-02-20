<div class="project">
	<div class="title"><? echo($project['Project']['name']); ?></div>

	<div class="menu">
		<ul>
			<li class="main_toggle">Main</li>
			<li class="messages_toggle">Messages (<?= count($project['StatusMessage']) ?>)</li>
			<li class="ticket_toggle">Tickets (<?= count($project['Ticket']) ?>)</li>
			<li class="ticket_menu">
				<ul>
					<?
						$tickets = $project['Ticket'];
						foreach($tickets as $ticket):
					?>

					<li id="ticket-<?= $ticket['id'] ?>-menu"><?= $ticket['name'] ?></li>
					<script type="text/javascript">
					$("#ticket-<?= $ticket['id']; ?>-menu").click(function()
					{
						$(".section").hide();
						$("#ticket-<?= $ticket['id']; ?>").toggle();
					});
					</script>
					<? endforeach; ?>
				</ul>
			</li>
		</ul>
	</div>

	<div class="content">
		<div class="main section">
			<div class="title">Main</div>
			<div class="details">
				<div class="link"><?= $project['Project']['link'] ?></div>
				<div class="created">Started: <?= $this->Time->timeAgoInWords($project['Project']['created']); ?></div>
				<div class="updated">Updated: <?= $this->Time->timeAgoInWords($project['Project']['updated']); ?></div>
				<div class="description"><?= $project['Project']['description'] ?></div>
			</div>
		</div>

		<div class="messages discussion section">
			<div class="title">Messages</div>
			<div class="form"> 
				<?php echo $this->Form->create('StatusMessage', array('url' => '/members/post_status_message'));?>
					<?php
						echo $this->Form->hidden('project_id', array('value' => $project['Project']['id']));
						echo $this->Form->hidden('user_id', array('value' => $user_id));
						echo $this->Form->textarea('message', array('label' => "", 'rows' => '6', 'cols' => '30'));
					?>
				<?php echo $this->Form->end('Post New Message');?>
			</div>
			<ul class="comments">
				<?
					$statuses = $project['StatusMessage'];
					//$statuses = array_reverse($statuses);
					foreach($statuses as $status):
				?>
				<li class="comment">
					<div class="text"><? echo($status['message']); ?></div>
					<div class="author"><? echo($status['User']['username']); ?></div>
					<div class="posted"><?= $this->Time->timeAgoInWords($status['created']); ?></div>
				</li>
				<?
					endforeach;
				?>
			</ul>
		</div>

		<?
			foreach($tickets as $ticket):
		?>
		<div class="ticket section" id="ticket-<?= $ticket['id'] ?>">
			<div class="title"><?= $ticket['name'] ?></div>
			<div class="status">STATUS: <?= $ticket['status'] ?></div>
				<? if ($ticket['status'] != "done") { ?>
				<a href="/members/mark_as_done/<? echo($ticket['id']); ?>">Mark Ticket Done</a>
				<? } ?>
			<div class="description">
				<?= $ticket['description']; ?>
			</div>

			<div class="attachments">
				<div class="sub title">Attachments</div>
				<?
					$images = $ticket['Image'];
					foreach($images as $image):
				?>
				<div class="attachment"><? echo($this->Html->link($image['name'], "http://s3.amazonaws.com".$image['s3_url'])); ?> - Description</div>
				<? endforeach; ?>

				<div class="form">
					<?php echo $this->Form->create('Image', array('url' => '/members/add_file_to_ticket', 'enctype' => 'multipart/form-data'));?>
						<?php
							echo $this->Form->hidden('s3_url');
							echo $this->Form->hidden('Ticket.ticket_id', array('value' => $ticket['id']));
							echo $this->Form->hidden('user_id', array('value' => $user_id));
							echo $this->Form->hidden('project_id', array('value' => $project['Project']['id']));
							echo $this->Form->file('name');
						?>
					<?php echo $this->Form->end(__('Attach File', true));?>
				</div>
			</div>

			<div class="discussion">
				<div class="sub title">Discussion</div>
				<div class="form_link item_head">New Comment</div>
				<div class="form item_body">
					<?php echo $this->Form->create('TicketComment', array('url' => '/members/add_comment/'));?>
						<?php
							echo $this->Form->input('comment');
							echo $this->Form->hidden('user_id', array('value' => $user_id));
							echo $this->Form->hidden('ticket_id', array('value' => $ticket['id']));
							echo $this->Form->hidden('project_id', array('value' => $project['Project']['id']));
							echo $this->Form->input('status');
						?>
					<?php echo $this->Form->end(__('Submit', true));?>
				</div>
				<ul class="comments">
					<?
						$ticket_comments = $ticket['TicketComment'];
						foreach($ticket_comments as $comment):
					?>
					<li class="comment">
						<div class="text"><?= $comment['comment']; ?></div>
						<div class="author"><? echo($comment['User']['username']); ?></div>
						<div class="posted"><?= $this->Time->timeAgoInWords($comment['updated']); ?></div>
						<ul class="replies">
							<?
								$comment_replies = $comment['CommentReply'];
								foreach($comment_replies as $reply):
							?>
							<li class="reply">
								<div class="text"><?= $reply['reply']; ?></div>
								<div class="author"><? echo($reply['User']['username']); ?></div>
								<div class="posted"><?= $this->Time->timeAgoInWords($reply['updated']); ?></div>
							</li>
							<? endforeach; ?>
						</ul>
						<div class="form_link item_head">Reply</div>
						<div class="form item_body">
							<?php echo $this->Form->create('CommentReply', array('url' => '/members/reply_to_comment'));?>
								<?php
									echo $this->Form->textarea('reply', array('label' => ""));
									echo $this->Form->hidden('ticket_comment_id', array('value' => $comment['id']));
									echo $this->Form->hidden('ticket_id', array('value' => $ticket['id']));
									echo $this->Form->hidden('project_id', array('value' => $project['Project']['id']));
									echo $this->Form->hidden('user_id', array('value' => $user_id));
								?>
							<?php echo $this->Form->end('Submit');?>
						</div>
					</li>
					<? endforeach; ?>
				</ul>
			</div>
		</div>
		<? endforeach; ?>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function()
{
	// Hide the forms as necessary
	$(".item_body").hide();

	//Hide the project sections
	$(".section").hide();

	//Hide the ticket menu by default
	$(".ticket_menu").hide();

	// Load up the specified section, default is set in the controller arguments
	// Can't load up tickets this way, or it go boom.
	if ("<?= $section; ?>" != "ticket")
	{
		$(".<?= $section; ?>").slideToggle(100);
	}

	// Load up the specified ticket if it's given ($t_id)
	$("#ticket-<?= $t_id; ?>").show();

	//Toggle the home section
	$(".main_toggle").click(function()
	{
		var showing = $(".main").css("display");
		if (showing == "none")
		{
			$(".section").hide();
			$(".main").slideToggle(100);
		}
	});

	//Toggle the home section
	$(".messages_toggle").click(function()
	{
		var showing = $(".messages").css("display");
		if (showing == "none")
		{
			$(".section").hide();
			$(".messages").slideToggle(100);
		}
	});

	//Toggle the tickets submenu
	$(".ticket_toggle").click(function()
	{
		$(".ticket_menu").slideToggle(100);
	});

  //toggle the component with class item_body
  $(".item_head").click(function()
  {
    $(this).next(".item_body").slideToggle(100);
  });
});
</script>