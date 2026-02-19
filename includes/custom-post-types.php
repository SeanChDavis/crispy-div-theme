<?php

add_action( 'init', function() {

	// Custom Development
	register_post_type( 'custom_development', array(
		'labels' => array(
			'name' => 'Custom Dev',
			'singular_name' => 'custom_dev',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New Custom Dev',
			'edit_item' => 'Edit Custom Dev',
			'new_item' => 'New Custom Dev',
			'view_item' => 'View Custom Dev',
			'search_items' => 'Search Custom Dev',
			'not_found' => 'No custom dev found',
			'not_found_in_trash' => 'No custom dev found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Custom Dev'
		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_rest' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'custom-development' ),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_icon' => 'dashicons-welcome-add-page',
		'menu_position' => null,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	) );
} );
