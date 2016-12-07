<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>
	<div class="main">
		<header>
			<ul class="brand">
				<li><?php bloginfo('name'); ?></li>
				<li><?php bloginfo('description'); ?></li>
			</ul>
			<navbar>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</navbar>
		</header>
