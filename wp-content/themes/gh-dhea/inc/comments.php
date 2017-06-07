<?php
// Custom Simmons Comments
function simmons_comment($comment, $args, $depth) {
	if ( 'div' === $args['style'] ) {
	$tag       = 'div';
	$add_below = 'comment';
	} else {
	$tag       = 'li';
	$add_below = 'div-comment';
	}
	?>
	<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment ">
		<?php endif; ?>
			<div class="comment__wrapper">
				<div class="comment__user-img-container">
					<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size']); ?>
				</div>
				<div class="comment__content">
					<div class="comment__author vcard">
						<?php printf( __( '<cite class="comment__author-name">%s</cite> <span class="says">wrote:</span>' ), get_comment_author_link() ); ?>
					</div>
					<div class="comment__post-date comment-meta commentmetadata">
						<span class="comment__date"><?php echo get_comment_date("n/d/y"); ?></span> at <span class="comment__date"><?php  echo get_comment_time(); ?></span>
					</div>
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
						<br />
					<?php endif; ?>
					<div class="comment__body">
						<p class="comment__copy">
							<?php comment_text(); ?>
						</p>
						<?php edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
					</div>

					<div class="comment__reply">
						<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'], 'after' => '→' ) ) ); ?>
					</div>

				</div>
			<?php if ( 'div' != $args['style'] ) : ?>
		</div>
	<?php endif; ?>
	</div>
  <?php
}




