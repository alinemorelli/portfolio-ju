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

/**** Registrar CSS ****/

wp_enqueue_style( 'style', get_stylesheet_uri() );

/**** Registrar scripts ****/

function my_scripts_loader() {
wp_enqueue_script( 'my-js', '/wp-content/themes/portfoliojuliana/script/main.js', false );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_loader' );

/**** Ativar imagem destacada ****/

add_theme_support( 'post-thumbnails' );
