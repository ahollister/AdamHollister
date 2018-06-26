<?php
/**
 * Enqueue scripts and styles
 */
function adamhollistercv_styles_scripts() {
	// Google Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:100|Fira+Mono' );

	// Main stylesheet (gulp compiles to here)
	wp_enqueue_style(
		'adamhollistercv-style',
		get_template_directory_uri() . '/dist/css/style.min.css',
		array(),
		filemtime( get_template_directory() . '/dist/css/style.min.css' ) // Bump version number when file contents changes
	);

	// Main JS file (gulp compiles to here)
	wp_enqueue_script(
		'adamhollistercv-js',
		get_template_directory_uri() . '/dist/js/scripts.min.js',
		array( 'jquery' ),
		filemtime( get_template_directory() . '/dist/js/scripts.min.js' ), // Bump version number when file contents changes
		true
	);
}
add_action( 'wp_enqueue_scripts', 'adamhollistercv_styles_scripts' );
