<?php

if ( ! function_exists( 'custom_taxonomy' ) ) {

// Register Custom Taxonomies
function custom_taxonomy() {

	//League Picture Divisions
		$labels = array(
			'name'                       => _x( 'Divisions', 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( 'Division', 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( 'Divisions', 'text_domain' ),
			'all_items'                  => __( 'All Divisions', 'text_domain' ),
			'parent_item'                => __( 'Parent Item', 'text_domain' ),
			'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
			'new_item_name'              => __( 'New Division', 'text_domain' ),
			'add_new_item'               => __( 'Add New Division', 'text_domain' ),
			'edit_item'                  => __( 'Edit Division', 'text_domain' ),
			'update_item'                => __( 'Update Division', 'text_domain' ),
			'view_item'                  => __( 'View Division', 'text_domain' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
			'add_or_remove_items'        => __( 'Add or remove division', 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
			'popular_items'              => __( 'Popular Divisions', 'text_domain' ),
			'search_items'               => __( 'Search Divisions', 'text_domain' ),
			'not_found'                  => __( 'Not Found', 'text_domain' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
		);
		register_taxonomy( 'league-picture-divisions', array( 'league_pictures' ), $args );


	//League Picture Years
		$labels = array(
			'name'                       => _x( 'Years', 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( 'Year', 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( 'Years', 'text_domain' ),
			'all_items'                  => __( 'All Years', 'text_domain' ),
			'parent_item'                => __( 'Parent Item', 'text_domain' ),
			'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
			'new_item_name'              => __( 'New Year', 'text_domain' ),
			'add_new_item'               => __( 'Add New Year', 'text_domain' ),
			'edit_item'                  => __( 'Edit Year', 'text_domain' ),
			'update_item'                => __( 'Update Year', 'text_domain' ),
			'view_item'                  => __( 'View Year', 'text_domain' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
			'add_or_remove_items'        => __( 'Add or remove year', 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
			'popular_items'              => __( 'Popular Years', 'text_domain' ),
			'search_items'               => __( 'Search Years', 'text_domain' ),
			'not_found'                  => __( 'Not Found', 'text_domain' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
		);
		register_taxonomy( 'league-picture-years', array( 'league_pictures' ), $args );


	//FAQ Categories
		$labels = array(
			'name'                       => _x( 'Categories', 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( 'Categories', 'text_domain' ),
			'all_items'                  => __( 'All Categories', 'text_domain' ),
			'parent_item'                => __( 'Parent Item', 'text_domain' ),
			'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
			'new_item_name'              => __( 'New Category', 'text_domain' ),
			'add_new_item'               => __( 'Add New Category', 'text_domain' ),
			'edit_item'                  => __( 'Edit Category', 'text_domain' ),
			'update_item'                => __( 'Update Category', 'text_domain' ),
			'view_item'                  => __( 'View Category', 'text_domain' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
			'add_or_remove_items'        => __( 'Add or remove category', 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
			'popular_items'              => __( 'Popular Categories', 'text_domain' ),
			'search_items'               => __( 'Search Categories', 'text_domain' ),
			'not_found'                  => __( 'Not Found', 'text_domain' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
		);
		register_taxonomy( 'faq-categories', array( 'faqs' ), $args );

	//Team Divisions
		$labels = array(
			'name'                       => _x( 'Divisions', 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( 'Division', 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( 'Divisions', 'text_domain' ),
			'all_items'                  => __( 'All Divisions', 'text_domain' ),
			'parent_item'                => __( 'Parent Item', 'text_domain' ),
			'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
			'new_item_name'              => __( 'New Division', 'text_domain' ),
			'add_new_item'               => __( 'Add New Division', 'text_domain' ),
			'edit_item'                  => __( 'Edit Division', 'text_domain' ),
			'update_item'                => __( 'Update Division', 'text_domain' ),
			'view_item'                  => __( 'View Division', 'text_domain' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
			'add_or_remove_items'        => __( 'Add or remove divisions', 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
			'popular_items'              => __( 'Popular Divisions', 'text_domain' ),
			'search_items'               => __( 'Search Divisions', 'text_domain' ),
			'not_found'                  => __( 'Not Found', 'text_domain' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
		);
		register_taxonomy( 'division', array( 'teams' ), $args );

	//Volunteer Positions
		$labels = array(
			'name'                       => _x( 'Positions', 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( 'Position', 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( 'Positions', 'text_domain' ),
			'all_items'                  => __( 'All Positions', 'text_domain' ),
			'parent_item'                => __( 'Parent Item', 'text_domain' ),
			'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
			'new_item_name'              => __( 'New Position', 'text_domain' ),
			'add_new_item'               => __( 'Add New Position', 'text_domain' ),
			'edit_item'                  => __( 'Edit Position', 'text_domain' ),
			'update_item'                => __( 'Update Position', 'text_domain' ),
			'view_item'                  => __( 'View Position', 'text_domain' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
			'add_or_remove_items'        => __( 'Add or remove Positions', 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
			'popular_items'              => __( 'Popular Positions', 'text_domain' ),
			'search_items'               => __( 'Search Positions', 'text_domain' ),
			'not_found'                  => __( 'Not Found', 'text_domain' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
		);
		register_taxonomy( 'roles', array( 'volunteers' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );

}
?>