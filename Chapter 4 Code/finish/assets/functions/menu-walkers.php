<?php 
// Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
class JBST4_Topbar_Menu_Walker extends Walker_Nav_Menu {

    // add main/sub classes to li's and links(&$output, $item, 
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0) {
   
  
    // passed classes
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
    
    $active = in_array('current-menu-item', $item->classes);
    $indent = ' ';
    // build html
    $output .= $indent . '<li class="nav-item">';
  
    // link attributes
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    if(in_array('current-menu-item', $item->classes)) {
      $attributes .= ' class="nav-link active"';
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s  <span class="sr-only">(' . __('current', 'jbst-4') . ')</span></a>%6$s',
        $args->before,
        $attributes,
        $args->link_before,
        apply_filters( 'the_title', $item->title, $item->ID ),
        $args->link_after,
        $args->after
        );
    }
    else {
      $attributes .= ' class="nav-link"';
      $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
        $args->before,
        $attributes,
        $args->link_before,
        apply_filters( 'the_title', $item->title, $item->ID ),
        $args->link_after,
        $args->after
        );
    }      

  
    // build html
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
