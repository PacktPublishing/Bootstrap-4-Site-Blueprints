<?php
/*
Template Name: Masonry grid layout
*/
?>
<?php get_header(); ?>
	<div class="container masonry" id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="col-md-8" role="main" itemprop="mainContentOfPage">
			<div class="card-columns">	
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'masonry' ); ?>
			    
			    <?php endwhile; endif; ?>							
			</div>    					
			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
