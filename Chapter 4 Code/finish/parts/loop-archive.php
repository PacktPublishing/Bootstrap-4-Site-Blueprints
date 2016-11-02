<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
<?php the_post_thumbnail('full'); ?>
<div class="blog-post">
	<header class="article-header">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->
					
	<section class="entry-content" itemprop="articleBody">
		<?php the_content('<button class="btn btn-accent-color">'. __('Read more...','jbst-4') . '</button>'); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<small class="text-muted">' . __('Tags:', 'jbst-4') . '</small> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->
</div>    				    						
</article> <!-- end article -->
