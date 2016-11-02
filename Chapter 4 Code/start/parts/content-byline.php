<p class="byline">
	<?php echo __('Posted on', 'jbst-4').' '?><a href="<?php the_permalink() ?>" rel="bookmark"><time itemprop="dataPublished"><?php the_time('F j, Y') ?></time></a> <span itemprop="author" itemscope itemtype="https://schema.org/Person"> <?php echo __('by', 'jbst-4').' ' ?><?php the_author_posts_link(); ?></span>  - <?php the_category(', ') ?>
</p>	
