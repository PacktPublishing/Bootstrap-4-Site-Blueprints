<?php
// Numeric Page Navi (built into the theme by default)
function jbst4_page_navi($before = '', $after = '') {
	global $wpdb, $wp_query;
	$request = $wp_query->request;
	$posts_per_page = intval(get_query_var('posts_per_page'));
	$paged = intval(get_query_var('paged'));
	$numposts = $wp_query->found_posts;
	$max_page = $wp_query->max_num_pages;
	if ( $numposts <= $posts_per_page ) { return; }
	if(empty($paged) || $paged == 0) {
		$paged = 1;
	}
	$pages_to_show = 7;
	$pages_to_show_minus_1 = $pages_to_show-1;
	$half_page_start = floor($pages_to_show_minus_1/2);
	$half_page_end = ceil($pages_to_show_minus_1/2);
	$start_page = $paged - $half_page_start;
	if($start_page <= 0) {
		$start_page = 1;
	}
	$end_page = $paged + $half_page_end;
	if(($end_page - $start_page) != $pages_to_show_minus_1) {
		$end_page = $start_page + $pages_to_show_minus_1;
	}
	if($end_page > $max_page) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = $max_page;
	}
	if($start_page <= 0) {
		$start_page = 1;
	}
	echo $before.'<nav style="text-align:center"><ul class="pagination">'."";
	if ($start_page >= 2 && $pages_to_show < $max_page) {
		$first_page_text = __( "First", 'jbst-4' );
		echo '<li class="page-link"><a href="'.get_pagenum_link().'" title="'.$first_page_text.'">'.$first_page_text.'</a></li>';
	}
	echo '<li class="page-item">';
	previous_posts_link('<span aria-hidden="true">&laquo;</span>
        <span class="sr-only">'. __( 'Previous', 'jbst-4' ) .'</span>');
	echo '</li>';
	for($i = $start_page; $i  <= $end_page; $i++) {
		if($i == $paged) {
			echo '<li class="page-item active"><span class="page-link"> '.$i.' </span></li>';
		} else {
			echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
		}
	}
	echo '<li class="page-item">';
	next_posts_link('<span aria-hidden="true">&raquo;</span>
        <span class="sr-only">'. __( 'Next', 'jbst-4' ) .'</span>'); 
	echo '</li>';
	if ($end_page < $max_page) {
		$last_page_text = __( "Last", 'jbst-4' );
		echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($max_page).'" title="'.$last_page_text.'">'.$last_page_text.'</a></li>';
	}
	echo '</ul></nav>'.$after."";
} /* End page navi */

add_filter('next_posts_link_attributes', 'posts_link_attributes_next');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_previous');

function posts_link_attributes_next() {
    return 'class="page-link" aria-label="' . __( 'Next', 'jbst-4' ) . '"';
}
function posts_link_attributes_previous() {
    return 'class="page-link" aria-label="' . __( 'Previous', 'jbst-4' ) . '"';
}
