<div id="sidebar1" class="sidebar col-md-4" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php elseif ( current_user_can( 'edit_theme_options' ) ): ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate some Widgets.", "jbst-4");  ?></p>
	</div>

	<?php endif; ?>

</div>
