<?php

/* Basic Functions															  */
/* -------------------------------------------------------------------------- */

function initial_setup() {
	register_nav_menu( 'header-menu', __( 'Header Menu' ) );
	//add_filter('show_admin_bar', '__return_false');
	//add_image_size ( 'name', 2000, 2000);
}
add_action( 'after_setup_theme', 'initial_setup' );



/* Enqueue Styles & Scripts													  */
/* -------------------------------------------------------------------------- */

function enqueue_files() {
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css');
	//wp_enqueue_script( 'script-name', get_stylesheet_directory_uri() . '/name.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_files' );



/* Removes Version at the end of JS & CSS Files 								  */
/* -------------------------------------------------------------------------- */

function remove_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_ver', 10, 2 );



/* Enable SVG								 								  */
/* -------------------------------------------------------------------------- */

function allow_svg( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg' );