<?php
/**
 * Register WordPress theme supports here
 */
function adamhollistercv_theme_supports() {
	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );
	// Enable support for Post Thumbnails on posts and pages
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'adamhollistercv_theme_supports' );
