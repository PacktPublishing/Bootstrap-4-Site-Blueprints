<?php
// Adding Translation Option
add_action('after_setup_theme', 'load_translations');
function load_translations(){
	load_theme_textdomain( 'jbst-4', get_template_directory() .'/assets/translation' );
}
?>
