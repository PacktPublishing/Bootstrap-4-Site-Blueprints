<?php
// Adding WP Functions & Theme Support
function jbst4_theme_support() {
    
    // Setup the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'jbst4_custom_background_args', array(
      'default-color'      => '#fff',
      'default-attachment' => 'fixed',
    ) ) );

 
	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form', 
	         ) 
	);
	
} /* end theme support */

/* custom logo */    
    
function jbst4_theme_prefix_setup() {
    /*
    * Enable support for custom logo.
    *
    */

    if ( function_exists( 'the_custom_logo' ) ) {
    add_theme_support( 'custom-logo', array(
      'height'      => 120,
      'width'       => 360,
      'flex-height' => true
    ) );
    }
}
add_action( 'after_setup_theme', 'jbst4_theme_prefix_setup' );
