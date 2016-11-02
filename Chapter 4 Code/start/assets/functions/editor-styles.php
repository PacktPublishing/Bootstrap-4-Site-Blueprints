<?php
// Adds your styles to the WordPress editor
add_action( 'init', 'jbst4_add_editor_styles' );
function add_editor_styles() {
    jbst4_add_editor_style( get_template_directory_uri() . '/assets/css/style.min.css' );
}
