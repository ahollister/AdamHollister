<?php
/**
 * Remove unneeded default scripts and features - included by WP Core
 */

// Remove WP Embed script
function adamhollistercv_deregister_embed_script() {
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'adamhollistercv_deregister_embed_script' );

// Remove Emoji script
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Remove Generator meta
remove_action( 'wp_head', 'wp_generator' );
