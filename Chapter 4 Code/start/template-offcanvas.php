<?php
/*
Template Name: Off-canvas Side bar
*/
?>

<?php get_header(); ?>
	<div class="container" id="content">
	
		<div id="inner-content" class="row row-offcanvas row-offcanvas-right">
	
		    <main id="main" class="col-xs-12 col-md-8" role="main" itemprop="mainContentOfPage">

              <p class="pull-xs-right hidden-md-up">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas"><?php _e('Toggle nav', 'jbst-4') ?></button>
              </p>
              		
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->

		    <?php get_sidebar('offcanvas'); ?>
		    <div class="clearfix hidden-xs-up"></div>
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>
