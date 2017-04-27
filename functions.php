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

// Adicionar botão ao tiny editor
function new_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
add_filter( 'mce_buttons_2', 'new_mce_buttons_2' );
function new_mce_before_init_insert_formats( $init_array ) {
    $style_formats = array(
        array(
            'title' => 'Imagem - 1/3',
            'block' => 'div',
            'classes' => 'img__third',
            'wrapper' => true,
        ),
        array(
            'title' => 'Imagem - 1/2',
            'block' => 'div',
            'classes' => 'img__half',
            'wrapper' => true,
        ),
        array(
            'title' => 'Imagem - 100%',
            'block' => 'div',
            'classes' => 'img__full',
            'wrapper' => true,
        ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );
    return $init_array;
}

// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'new_mce_before_init_insert_formats' );

// img unautop
function img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<div class="image">$1</div>', $pee);
    return $pee;
}
add_filter( 'the_content', 'img_unautop', 30 );

// img unautop
function embed_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<iframe .*?>*?<\\/iframe>)?\\s*<\\/p>/s', '<div class="iframe">$1</div>', $pee);
    return $pee;
}
add_filter( 'the_content', 'embed_unautop', 30 );