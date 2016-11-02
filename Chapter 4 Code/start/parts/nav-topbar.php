<?php
function jbst4_toggle_button() {
?>
  <button class="navbar-toggler hidden-md-up pull-xs-right" type="button" data-toggle="collapse" data-target="#CollapsingNavbar">
    &#9776;
  </button>
  
<?php
}    
?>
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'jbst-4' ); ?></a>
<header itemscope itemtype="https://schema.org/WPHeader">
<?php
if (has_custom_logo()) {
?>    
  <div class="container logo">
  
  <?php
  jbst4_toggle_button();
  the_custom_logo();
  ?>
  </div> 
<?php
}
?>
<nav class="navbar navbar-light bg-faded navbar-full" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
  <?php
  if (!has_custom_logo()) {
    jbst4_toggle_button();  
  }
  ?>      
  <div class="container navbar-toggleable-sm collapse" id="CollapsingNavbar">
    <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><span itemprop="name"><?php esc_html( bloginfo('name') ); ?></span></a>
    <?php jbst4_top_nav(); ?>
    <?php get_search_form(); ?> 
  </div>
  
</nav>

</header>
