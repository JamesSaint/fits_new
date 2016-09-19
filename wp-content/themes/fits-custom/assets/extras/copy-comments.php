
<?php get_header(); ?>

<!-- ==============================================
Comments 
=============================================== -->
<section id="section-white">
<div class="container">
	<div class="row">
	<div class="col-md-12">
<?php if('comments.php'==basename($_SERVER['SCRIPT_FILENAME'])) die('Please do not load this page directly. Thanks!'); ?>

<?php if(!empty($post->post_password) && $_COOKIE['wp-postpass_'.COOKIEHASH]!=$post->post_password): ?> 
	<!-- Comments are password-protected -->
<?php else: ?>
	<?php if(have_comments()): ?>
		<h1><?php comments_number('No comments', 'One comment', '% comments'); ?></h1>
		<?php wp_list_comments('type=comment&callback=custom_comment_callback'); ?>
	<?php endif; ?>
<?php endif; ?>

<?php

function custom_comment_callback($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	$GLOBALS['comment_depth'] = $depth;
	?>
	
	<?php $author_comment = ''; if($comment->user_id == 1) $author_comment = 'author-comment'; } ?>
	
	<li id="comment-<?php comment_ID(); ?>" <?php comment_class($author_comment); ?>>
		
		<?php echo get_avatar($comment->comment_author_email, '96', 'path_to_default'); ?>
		
		<div class="comment-metadata">
			<span class="comment-author"><?php comment_author_link(); ?></span>
			<span class="comment-date"><?php comment_date(); ?></span>
		</div>
		
		<?php if($comment->comment_approved == '0'): ?>
			<div class="unapproved">
				Your comment is awaiting moderation
			</div>
		<?php endif; ?>
		
		<div class="comment-content">
			<?php comment_text(); ?>
		</div>
		
		<?php
		comment_reply_link(array_merge($args, array(
			'reply_text' => 'Reply',
			'login_text' => 'Log in to reply',
			'depth' => $depth
		)));
		?>
		
	</li>
	
	<?php
}

?>
</div>
</div>
</div>
</section>

<!-- ==============================================
/ Main Content Area
=============================================== -->

<?php get_footer(); ?>