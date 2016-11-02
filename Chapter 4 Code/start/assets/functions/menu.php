<?php
// Register menus
register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu', 'jbst-4' ),   // Main nav in header
		'footer-links' => __( 'Footer Links', 'jbst-4' ) // Secondary nav in footer
	)
);

// The Top Menu
function jbst4_top_nav() {
	 wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => '',       // Adding custom nav class
        'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
        'theme_location' => 'main-nav',        			// Where it's located in the theme
        'depth' => 0,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new JBST4_Topbar_Menu_Walker()
    ));
} /* End Top Menu */


// The Footer Menu
function jbst4_footer_links() {
    wp_nav_menu(array(
    	'container' => 'false',                              // Remove nav container
    	'menu' => __( 'Footer Links', 'jbst-4' ),   	// Nav name
    	'menu_class' => 'menu',      					// Adding custom nav class
    	'theme_location' => 'footer-links',             // Where it's located in the theme
        'depth' => 0,                                   // Limit the depth of the nav
    	'fallback_cb' => ''  							// Fallback function
	));
} /* End Footer Menu */

// Header Fallback Menu
function jbst4_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
    	'menu_class' => '',      // Adding custom nav class
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
        'link_before' => '',                            // Before each link
        'link_after' => ''                             // After each link
	) );
}

// Footer Fallback Menu
function jbst4_footer_links_fallback() {
	/* You can put a default here if you like */
}
