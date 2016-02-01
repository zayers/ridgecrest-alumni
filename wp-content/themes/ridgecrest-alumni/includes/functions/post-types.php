<?php

if ( ! function_exists('custom_post_type') ) {

// Register Custom Post Types
function custom_post_type() {

	//Pictures
	$labels = array(
		'name'                => _x( 'League Pictures', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'League Picture', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'League Pictures', 'text_domain' ),
		'name_admin_bar'      => __( 'League Pictures', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All League Pictures', 'text_domain' ),
		'add_new_item'        => __( 'Add New League Picture', 'text_domain' ),
		'add_new'             => __( 'Add League Picture', 'text_domain' ),
		'new_item'            => __( 'New League Picture', 'text_domain' ),
		'edit_item'           => __( 'Edit League Picture', 'text_domain' ),
		'update_item'         => __( 'Update League Picture', 'text_domain' ),
		'view_item'           => __( 'View League Picture', 'text_domain' ),
		'search_items'        => __( 'Search League Picture', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'League Picture', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'league-picture-years' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-camera',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'league_pictures', $args );


	//FAQs
	$labels = array(
		'name'                => _x( 'FAQs', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'FAQ', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'FAQs', 'text_domain' ),
		'name_admin_bar'      => __( 'FAQs', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All FAQs', 'text_domain' ),
		'add_new_item'        => __( 'Add New FAQ', 'text_domain' ),
		'add_new'             => __( 'Add FAQ', 'text_domain' ),
		'new_item'            => __( 'New FAQ', 'text_domain' ),
		'edit_item'           => __( 'Edit FAQ', 'text_domain' ),
		'update_item'         => __( 'Update FAQ', 'text_domain' ),
		'view_item'           => __( 'View FAQ', 'text_domain' ),
		'search_items'        => __( 'Search FAQ', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'FAQ', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'faq-categories' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-editor-help',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'faqs', $args );

	//Teams
	$labels = array(
		'name'                => _x( 'Teams', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Teams', 'text_domain' ),
		'name_admin_bar'      => __( 'Teams', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Teams', 'text_domain' ),
		'add_new_item'        => __( 'Add New Team', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Team', 'text_domain' ),
		'edit_item'           => __( 'Edit Team', 'text_domain' ),
		'update_item'         => __( 'Update Team', 'text_domain' ),
		'view_item'           => __( 'View Team', 'text_domain' ),
		'search_items'        => __( 'Search Team', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Team', 'text_domain' ),
		'description'         => __( 'Teams and Cheerleading Squads within League.', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'divisions' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-flag',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'teams', $args );

	//Volunteers
	$labels = array(
		'name'                => _x( 'Staff', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Staff', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Staff', 'text_domain' ),
		'name_admin_bar'      => __( 'Staff', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Staff', 'text_domain' ),
		'add_new_item'        => __( 'Add New Staff', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Staff', 'text_domain' ),
		'edit_item'           => __( 'Edit Staff', 'text_domain' ),
		'update_item'         => __( 'Update Staff', 'text_domain' ),
		'view_item'           => __( 'View Staff', 'text_domain' ),
		'search_items'        => __( 'Search Staff', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Staff', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-id-alt',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'volunteers', $args );


	//Callouts
		$labels = array(
			'name'                => _x( 'Callouts', 'Post Type General Name', 'text_domain' ),
			'singular_name'       => _x( 'Callout', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'           => __( 'Callouts', 'text_domain' ),
			'name_admin_bar'      => __( 'Callouts', 'text_domain' ),
			'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
			'all_items'           => __( 'All Callouts', 'text_domain' ),
			'add_new_item'        => __( 'Add New Callout', 'text_domain' ),
			'add_new'             => __( 'Add New', 'text_domain' ),
			'new_item'            => __( 'New Callout', 'text_domain' ),
			'edit_item'           => __( 'Edit Callout', 'text_domain' ),
			'update_item'         => __( 'Update Callout', 'text_domain' ),
			'view_item'           => __( 'View Callout', 'text_domain' ),
			'search_items'        => __( 'Search Callout', 'text_domain' ),
			'not_found'           => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
		);
		$args = array(
			'label'               => __( 'Callout', 'text_domain' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-megaphone',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type( 'callouts', $args );
}


// Hook into the 'init' action
		add_action( 'init', 'custom_post_type', 0 );	
	}
?>