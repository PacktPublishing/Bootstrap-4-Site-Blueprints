<?php
	if ( post_password_required() ) {
		return;
	}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'jbst-4' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="sr-only"><?php esc_html_e( 'Comment navigation', 'jbst-4' ); ?></h2>
			<ul class="pager">

				<li class="pager-prev"><?php previous_comments_link( esc_html__( 'Older Comments', 'jbst-4' ) ); ?></li>
				<li class="pager-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'jbst-4' ) ); ?></li>

			</ul><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ul class="media-list">
			<?php wp_list_comments('type=comment&callback=jbst4_comments'); ?>
		</ul>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="sr-only"><?php esc_html_e( 'Comment navigation', 'jbst-4' ); ?></h2>
			<ul class="pager">

				<li class="pager-prev"><?php previous_comments_link( esc_html__( 'Older Comments', 'jbst-4' ) ); ?></li>
				<li class="pager-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'jbst-4' ) ); ?></li>

			</ul><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'jbst-4' ); ?></p>
	<?php endif; ?>

	<?php comment_form(array('class_submit'=>'btn btn-accent-color')); ?>

</div><!-- #comments -->
