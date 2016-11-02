<div id="sidebar" class="col-xs-6 col-md-4 sidebar sidebar-offcanvas" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php else if ( current_user_can( 'edit_theme_options' ) ): ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate some Widgets.", "jbst-4");  ?></p>
	</div>

	<?php endif; ?>

</div>
