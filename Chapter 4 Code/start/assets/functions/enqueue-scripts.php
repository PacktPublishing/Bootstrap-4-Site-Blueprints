<?php
function jbst4_site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    
     // Adding tether in the footer
    wp_enqueue_script( 'tether', get_template_directory_uri() . '/vendor/tether/dist/js/tether.min.js', array( 'jquery' ), '1.3.2', true );
    
    // Adding Bootstrap scripts file in the footer
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery','tether' ), '4.0', true );
    
    // Adding scripts file in the footer
    wp_enqueue_script( 'jbst-site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );
   
    // Register main stylesheet
    wp_enqueue_style( 'jbst-site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'jbst4_site_scripts', 999);
