<div class="col-xs-6 col-md-4 sidebar sidebar-offcanvas" id="sidebar">
	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate some Widgets.", "jbst-4");  ?></p>
	</div>

	<?php endif; ?>

</div>
