<?php
// Adding Translation Option
add_action('after_setup_theme', 'jbst4_load_translations');
function jbst4_load_translations(){
	load_theme_textdomain( 'jbst-4', get_template_directory() .'/assets/translation' );
}
?>
