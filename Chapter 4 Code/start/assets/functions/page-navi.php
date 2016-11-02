<?php
function jbst4_page_navi() {
// Previous/next page navigation.
// replacement for the_posts_pagination
// see: http://wordpress.stackexchange.com/questions/228185/is-using-the-posts-navigation-required
echo str_replace (
array('"next page-numbers"','"previous page-numbers"'),
array('"next page-numbers" aria-label="' . __( 'Next', 'jbst-4' ) . '"', '"previous page-numbers" aria-label="' . __( 'Previous', 'jbst-4' ) . '"'),
get_the_posts_pagination( array(
  'prev_text'          => '<span aria-hidden="true">&laquo;</span><span class="sr-only">'. __( 'Previous', 'jbst-4' ) .'</span>',
  'next_text'          => '<span class="page-link" aria-hidden="true">&raquo;</span><span class="sr-only">'. __( 'Next', 'jbst-4' ) .'</span>',
  'show_all'           => true,
  'before_page_number' => '<span class="page-link">',
  'after_page_number' => '</span>',
  'screen_reader_text' => __('Page navigation', 'jbst-4')
  ) 
)
);
} 
/* End page navi */
