<?php

//--- Custom Excerpt Length
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//--- Read More Link
function new_excerpt_more( $more ) {
	return '...<a class="read-more" href="'. get_permalink( get_the_ID() ) . '"> Continue Reading »</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

//--- Scripts
add_action( 'wp_enqueue_scripts', 'child_add_scripts' );

function child_add_scripts() {
    wp_register_script(
        'salvattore',
        get_stylesheet_directory_uri() . '/js/salvattore.min.js',
        array( 'jquery' ),
        '1.0',
        true
    );

    wp_enqueue_script( 'salvattore' );

    wp_register_script(
        'swipe',
        get_stylesheet_directory_uri() . '/js/swipe.js',
        array( 'jquery' ),
        '1.0',
        true
    );

    wp_enqueue_script( 'swipe' );

    wp_register_script(
        'scripts',
        get_stylesheet_directory_uri() . '/js/scripts.js',
        array( 'jquery' ),
        '1.0',
        true
    );

    wp_enqueue_script( 'scripts' );
}