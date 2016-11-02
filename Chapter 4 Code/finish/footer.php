        <footer class="container page-footer bg-dark">
          <div class="row">  
            <div class="col-md-6">
              <p class="page-foooter-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <nav role="navigation">
                  <?php jbst4_footer_links(); ?>
                </nav>
                <div class="social-buttons">
                  <?php get_template_part( 'parts/component', 'social-links' ); ?>
                </div>
            </div>
            <div class="col-md-6">
              <h3>Join our Newsletter</h3>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Your e-mail">
                    <span class="input-group-btn">
                      <button class="btn btn-accent-color" type="button">Subscribe</button>
                    </span>
                </div>
             </div>
             <div class="col-xs-12 text-xs-center">
               &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.
             </div>    
          </div>
        </footer>
        
<div class="social-buttons fixed-media bg-accent-color">
  <?php get_template_part( 'parts/component', 'social-links' ); ?>
</div>        
        
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
