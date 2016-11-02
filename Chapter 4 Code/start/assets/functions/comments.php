<?php
// Comment Layout
function jbst4_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('media'); ?> itemprop="comment" itemscope itemtype="http://schema.org/Comment">
			<div class="media-left">
			    <?php echo get_avatar( $comment, 75, '', sprintf( esc_html__( 'Avatar of %s', 'jbst-4' ), get_comment_author() ), array('class' => 'media-object')); ?>
			</div>
			<div class="media-body">
				<article id="comment-<?php comment_ID(); ?>" class="clearfix col-lg-12">
					<header class="comment-author">
						<?php
							// create variable
							$bgauthemail = get_comment_author_email();
						?>
						<small class="text-muted"><?php printf(__('%s', 'jbst-4'), get_comment_author_link()) ?> on
						<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars(  esc_url(get_comment_link( $comment->comment_ID )) ) ?>"><?php comment_time(__(' F jS, Y - g:ia', 'jbst-4')); ?> </a></time>
						<?php edit_comment_link(__('(Edit)', 'jbst-4'),'  ','') ?></small>
					</header>
					<?php if ($comment->comment_approved == '0') : ?>
						<div class="alert alert-info">
							<p><?php _e('Your comment is awaiting moderation.', 'jbst-4') ?></p>
						</div>
					<?php endif; ?>
					<section class="comment_content clearfix">
						<?php comment_text() ?>
					</section>
					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</article>
			</div>
	<!-- </li> is added by WordPress automatically -->
<?php
}
