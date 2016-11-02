					<footer class="container footer" role="contentinfo" itemscope itemtype="http://schema.org/WPfooter">
						<div id="inner-footer" class="row">
							<div class="col-xs-12">
								<nav role="navigation">
		    						<?php jbst4_footer_links(); ?>
		    					</nav>
		    				</div>
							<div class="col-xs-12">
								<p style="text-align: center;">&copy; <time><?php get_the_time('Y')?></time> <?php esc_html( bloginfo('name') ); ?>.</p>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->


		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
