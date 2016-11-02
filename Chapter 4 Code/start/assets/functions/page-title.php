<?php
// Changing the rendering of the page title
// http://wordpress.stackexchange.com/questions/228183/custom-attribute-for-the-title-tag-with-wp-title
if (has_action('wp_head','_wp_render_title_tag') == 1) {
    remove_action('wp_head','_wp_render_title_tag',1);
    add_action('wp_head','jbst4_custom_wp_render_title_tag_filtered',1);
}

function jbst4_custom_wp_render_title_tag_filtered() {
    if (function_exists('_wp_render_title_tag')) {
        ob_start(); 
        _wp_render_title_tag(); 
        $titletag = ob_get_contents();
        ob_end_clean();
    } else { $titletag = ''; }
    echo apply_filters('wp_render_title_tag_filter',$titletag);
}

add_filter('wp_render_title_tag_filter','jbst4_custom_wp_render_title_tag');

function jbst4_custom_wp_render_title_tag($titletag) {
    $titletag = str_replace('<title>','<title itemprop="name">',$titletag);
    return $titletag;
}
