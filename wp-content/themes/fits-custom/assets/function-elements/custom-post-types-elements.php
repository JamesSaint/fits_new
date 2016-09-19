<?php

// =======================================================================// 
// !              		  Register Custom Posts for Team                  //
// =======================================================================// 

function fits_team_post_type() {

	$labels = array(
		'name'                => _x( 'FITS Team', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'FITS Team Member', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'FITS Team', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Team:', 'text_domain' ),
		'all_items'           => __( 'All FITS Team Members', 'text_domain' ),
		'view_item'           => __( 'View FITS Team Member', 'text_domain' ),
		'add_new_item'        => __( 'Add New FITS Team Member', 'text_domain' ),
		'add_new'             => __( 'New FITS Team Member', 'text_domain' ),
		'edit_item'           => __( 'Edit FITS Team Member', 'text_domain' ),
		'update_item'         => __( 'Update FITS Team Member', 'text_domain' ),
		'search_items'        => __( 'Search FITS Team Members', 'text_domain' ),
		'not_found'           => __( 'No FITS Team Member found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No FITS Team Member found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'FITS Team', 'text_domain' ),
		'description'         => __( 'FITS Team', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail'),
		'taxonomies'          => array( 'category'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => false,
		'menu_position'       => 20,
		'can_export'          => false,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'fits_team_members', $args );
}
add_action( 'init', 'fits_team_post_type', 0 );

// =======================================================================// 
// !                Register Custom Posts for Parnters             //
// =======================================================================// 

function partners_post_type() {

	$labels = array(
		'name'                => _x( 'Partners', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Partner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Partners', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Partners:', 'text_domain' ),
		'all_items'           => __( 'All Partners', 'text_domain' ),
		'view_item'           => __( 'View Partner', 'text_domain' ),
		'add_new_item'        => __( 'Add New Partner', 'text_domain' ),
		'add_new'             => __( 'New Partner', 'text_domain' ),
		'edit_item'           => __( 'Edit Partner', 'text_domain' ),
		'update_item'         => __( 'Update Partner', 'text_domain' ),
		'search_items'        => __( 'Search Partner', 'text_domain' ),
		'not_found'           => __( 'No Partner found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Partner found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Partners', 'text_domain' ),
		'description'         => __( 'Partners', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'can_export'          => false,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'partners', $args );
}
add_action( 'init', 'partners_post_type', 0 );

// =======================================================================// 
// !              		  Register Custom Posts for Downloads             //
// =======================================================================// 

function fits_downloads_post_type() {

	$labels = array(
		'name'                => _x( 'Downloads', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Download', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Downloads', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Team:', 'text_domain' ),
		'all_items'           => __( 'All Downloads', 'text_domain' ),
		'view_item'           => __( 'View Downloads', 'text_domain' ),
		'add_new_item'        => __( 'Add New Download', 'text_domain' ),
		'add_new'             => __( 'New Download', 'text_domain' ),
		'edit_item'           => __( 'Edit Download', 'text_domain' ),
		'update_item'         => __( 'Update Download', 'text_domain' ),
		'search_items'        => __( 'Search Downloads', 'text_domain' ),
		'not_found'           => __( 'No Downloads found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Downloads found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'FITS Team', 'text_domain' ),
		'description'         => __( 'FITS Team', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'          => array( 'category'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'can_export'          => false,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'downloads', $args );
}
add_action( 'init', 'fits_downloads_post_type', 0 );