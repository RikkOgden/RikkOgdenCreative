<?php

// Add scripts and stylesheets

// Add Google Fonts
function startwordpress_google_fonts() {
				wp_register_style('Roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700');
        wp_register_style('OpenSans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,100,300,500,700');
				wp_enqueue_style( 'OpenSans');
        wp_enqueue_style( 'Roboto');
		}

add_action('wp_print_styles', 'startwordpress_google_fonts');

function startwordpress_scripts() {
  wp_deregister_script( 'jquery' ); // deregisters the default WordPress jQuery
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/styles/style.css' );


}
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );



function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


add_theme_support( 'post-thumbnails' );
