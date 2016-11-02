<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">					
<?php the_post_thumbnail('full', array('class' => 'card-img-top')); ?>
<div class="mansory-blog-post card-block">
	<header class="article-header">
		<h2 class="card-title" itemprop="headline"><a href="<?php get_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'parts/content', 'byline-masonry' ); ?>
	</header> <!-- end article header -->
					
	<section class="entry-content" itemprop="articleBody">

		<?php the_excerpt(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	<p class="tags card-text"><small class="text-muted"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jbst-4') . '</span> ', ', ', ''); ?></small></p>
	</footer> <!-- end article footer -->
</div>    				    						
</article> <!-- end article -->
