<?php
/**
 * Enqueue scripts and styles
 */
function adamhollistercv_styles_scripts() {
	// Main stylesheet (gulp compiles to here)
	wp_enqueue_style( 'adamhollistercv-style', get_template_directory_uri() . '/dist/css/style.min.css' );

	// Main JS file (gulp compiles to here)
	wp_enqueue_script(
		'adamhollistercv-js',
		get_template_directory_uri() . '/dist/js/scripts.min.js',
		array( 'jQuery' ),
		filemtime( get_template_directory() . '/dist/js/scripts.min.js' ), // Need to use get_template_directory for filemtime
		true
	);
}
add_action( 'wp_enqueue_scripts', 'adamhollistercv_styles_scripts' );
