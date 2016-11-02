<p class="card-text"><small class="text-muted">
	<?php 
    printf( __( 'Posted on %s by  %s - %s', 'jbst-4' ), get_the_time('F j, Y') , esc_url( get_the_author_posts_link()), esc_html(implode(",", get_the_category())) );
    ?>
</small></p>	
