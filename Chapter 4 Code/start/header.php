<!DOCTYPE html>
<html <?php jbst_html_tag_schema(); ?> <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
    <?php wp_head(); ?>
  </head>
	<body <?php body_class(); ?>>

				<header itemscope itemtype="https://schema.org/WPHeader">	
				<?php get_template_part( 'parts/nav', 'topbar' ); ?>
                </header>
