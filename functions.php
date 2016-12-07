<?php
/**
 * Portfólio Juliana functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 */


/**** Registrar menu principal ****/

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/**** Ativar imagem destacada ****/
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 120, 120 );

/**** Registrar css ****/
wp_enqueue_style( 'style', get_stylesheet_uri() );