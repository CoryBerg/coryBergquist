<?php

$comments_args = array(
	// change the title of send button
	'label_submit'=>'Add Comment',
	// change the title of the reply section
	'title_reply'=>'',
	// remove "Text or HTML to be displayed after the set of comment fields"
	'comment_notes_after' => '',
	// redefine your own textarea (the comment body)
	'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Join the conversation', 'noun' ) . '</label><textarea id="comment" placeholder="Write a comment" class="comment__textarea" name="comment" aria-required="true" rows="10"></textarea></p>',
);

?>

<div class="comments">
	<?php comment_form($comments_args); ?>
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'geekhive' ); ?></p>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<?php wp_list_comments('type=comment&callback=simmons_comment&style=div&max_depth=3'); ?>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'geekhive' ); ?></p>

<?php endif; ?>

</div>