<?php
/**
 * Custom Post Types
 */

// Register Projects post type
function adamhollistercv_register_projects_cpt() {
	register_post_type(
		'project',
		array(
			'labels'              => array(
				'name'               => 'Projects',
				'singular_name'      => 'Project',
				'all_items'          => 'All Projects',
				'add_new'            => 'Add New',
				'add_new_item'       => 'Add New Project',
				'edit'               => 'Edit',
				'edit_item'          => 'Edit Project',
				'new_item'           => 'New Project',
				'view_item'          => 'View Projects',
				'search_items'       => 'Search Projects',
				'not_found'          => 'Nothing found in the Database.',
				'not_found_in_trash' => 'Nothing found in Trash',
				'parent_item_colon'  => '',
			),
			'description'         => 'Projects custom post type',
			'public'              => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'query_var'           => true,
			'menu_position'       => 4,
			'menu_icon'           => 'dashicons-desktop',
			'rewrite'             => array(
				'slug'       => 'project',
				'with_front' => false,
			),
			'has_archive'         => false,
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'supports'            => array( 'title', 'thumbnail', 'revisions', 'sticky', 'editor' ),
		)
	);
}
add_action( 'init', 'adamhollistercv_register_projects_cpt' );



// Register Skills post type
function adamhollistercv_register_skills_cpt() {
	register_post_type(
		'skill',
		array(
			'labels'              => array(
				'name'               => 'Skills',
				'singular_name'      => 'Skill',
				'all_items'          => 'All Skills',
				'add_new'            => 'Add New',
				'add_new_item'       => 'Add New Skill',
				'edit'               => 'Edit',
				'edit_item'          => 'Edit Skill',
				'new_item'           => 'New Skill',
				'view_item'          => 'View Skills',
				'search_items'       => 'Search Skills',
				'not_found'          => 'Nothing found in the Database.',
				'not_found_in_trash' => 'Nothing found in Trash',
				'parent_item_colon'  => '',
			),
			'description'         => 'Skills custom post type',
			'public'              => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'query_var'           => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-star-filled',
			'rewrite'             => array(
				'slug'       => 'skill',
				'with_front' => false,
			),
			'has_archive'         => false,
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'supports'            => array( 'title', 'thumbnail', 'revisions', 'sticky', 'editor' ),
		)
	);
}
add_action( 'init', 'adamhollistercv_register_skills_cpt' );
