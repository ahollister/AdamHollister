<?php
/**
 * Theme functions
 */

// Remove some unneeded default scripts and features that WP Core includes
require get_template_directory() . '/inc/remove-defaults.php';

// Add theme support for some WP features
require get_template_directory() . '/inc/theme-supports.php';

// Add menu locations
require get_template_directory() . '/inc/menus.php';

// Enqueue styles and scripts
require get_template_directory() . '/inc/enqueues.php';
