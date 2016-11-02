<?php
//see https://paulund.co.uk/add-schema-org-wordpress

function jbst_html_tag_schema()
{
    $schema = 'http://schema.org/';

    // Is single post
    if(is_single())
    {
        $type = "Article";
    }
    // Contact form page ID
    else if( is_page(1) )
    {
        $type = 'ContactPage';
    }
    // Is author page
    elseif( is_author() )
    {
        $type = 'ProfilePage';
    }
    // Is search results page
    elseif( is_search() )
    {
        $type = 'SearchResultsPage';
    }
    // Is of movie post type
    elseif(is_singular('movies'))
    {
        $type = 'Movie';
    }
    // Is of book post type
    elseif(is_singular('books'))
    {
        $type = 'Book';
    }
    else
    {
        $type = 'WebPage';
    }

    echo 'itemscope itemtype="' . $schema . $type . '"';
}


function jbst_get_the_terms($terms) {
    $terms = preg_replace('/rel="tag">([^<]+)<\/a>/',"rel=\"tag\"><span itemprop=\"keywords\">\\1</span></a>" , $terms);
    return $terms;
}    

add_filter( 'the_tags', 'jbst_get_the_terms');

function jbst_the_category($list) {
    $list = preg_replace('/rel="category">([^<]+)<\/a>/',"rel=\"category\"><span itemprop=\"keywords\">\\1</span></a>" , $list);
    return $list;
}    

add_filter( 'the_category', 'jbst_the_category');

function jbst_the_author_posts_link($link) {
    $link = preg_replace('/rel="author">([^<]+)<\/a>/',"rel=\"author\"  itemprop=\"url\"><span itemprop=\"name\">\\1</span></a>" , $link);
    return $link;
}    

add_filter( 'the_author_posts_link', 'jbst_the_author_posts_link');
