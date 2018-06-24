<?php
/**
 * Register menu locations
 */
function adamhollistercv_register_menus() {
	// Primary menu
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'adamhollistercv' ),
	) );
}
add_action( 'after_setup_theme', 'adamhollistercv_register_menus' );
