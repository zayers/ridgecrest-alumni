<?php

// Remove WP Logo
	add_action('admin_bar_menu', 'remove_wp_logo', 999);
	function remove_wp_logo( $wp_admin_bar ) {
		$wp_admin_bar->remove_node('wp-logo');
	}

// Custom Admin Styles
	function load_custom_admin_styles() {
		wp_register_style( 'custom_dashicons', get_template_directory_uri() . '/assets/fonts/style.css', false, '1.0.0' );
		wp_enqueue_style( 'custom_dashicons' );
	}
	add_action( 'admin_enqueue_scripts', 'load_custom_admin_styles' );
	
	function my_admin_theme_style() {
	    wp_enqueue_style('my-admin-theme', get_template_directory_uri() . '/assets/css/admin.css');
	}
	add_action('admin_enqueue_scripts', 'my_admin_theme_style');
	add_action('login_enqueue_scripts', 'my_admin_theme_style');
	

// Admin footer modification
	function remove_footer_admin ()
	{
	    echo '<span id="footer-thankyou">Uproar Theme built by <a href="http://zackayers.com" target="_blank">Zack Ayers</a>.</span>';
	}
	add_filter('admin_footer_text', 'remove_footer_admin');

// Menus
	function edit_admin_menus() {
	    global $menu;
	    global $submenu;
	
	    $menu[5][0] = 'News'; // Change Posts to Recipes
	    $submenu['edit.php'][5][0] = 'All News';
	    $submenu['edit.php'][10][0] = 'Add News';
	}
	add_action( 'admin_menu', 'edit_admin_menus' );


// Custom Menu Order
	function custom_menu_order($menu_ord) {
	    if (!$menu_ord) return true;
	
	    return array(
	        'index.php', // Dashboard
	        'themes.php', // Appearance
	
	        'upload.php', // Media
	        'acf-options', //ACF Options
			'edit.php', // Posts        
			'edit.php?post_type=page', // Pages
			'edit.php?post_type=callouts', //Callouts
			'edit.php?post_type=faqs', //FAQs
	
	        'separator1', // First separator
	        'theme-general-settings',
	        'edit.php?post_type=tribe_events', //Events
			'edit.php?post_type=teams', //Teams
			'edit.php?post_type=volunteers', //Volunteers
			'edit.php?post_type=league_pictures', //League Pictures
	
	
			'separator2', // Second separator
			'gf_edit_forms', //Gravity Forms
			'edit.php?post_type=product', //Product
			'woocommerce', //WooCommerce
	
	        'separator-last', // Last separator
	        'options-general.php', //Settings
			'users.php', //Users
			'tools.php', // Tools
	        'plugins.php', // Plugins
	    );
	}
	add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
	add_filter('menu_order', 'custom_menu_order');

//Remove Unused Menu Items
	function remove_menus(){
	  remove_menu_page( 'edit-comments.php' ); //Comments
	}
	add_action( 'admin_menu', 'remove_menus' );


//ACF Admin Bar
	add_filter( 'show_admin_bar', '__return_false' );
		if( function_exists('acf_add_options_page') ) {
			acf_add_options_page(array(
				'page_title' 	=> 'Uproar: Global Settings',
				'menu_title'	=> 'Theme Options',
				'menu_slug' 	=> 'theme-general-settings',
				'capability'	=> 'edit_posts',
				'position' => 1,
				'redirect'		=> false
			));
			acf_add_options_sub_page(array(
				'page_title' 	=> 'Uproar: Header Settings',
				'menu_title'	=> 'Header',
				'parent_slug'	=> 'theme-general-settings',
			));
			acf_add_options_sub_page(array(
				'page_title' 	=> 'Uproar: Footer Settings',
				'menu_title'	=> 'Footer',
				'parent_slug'	=> 'theme-general-settings',
			));
			acf_add_options_sub_page(array(
				'page_title' 	=> 'Uproar: League Setup',
				'menu_title'	=> 'Divisions',
				'parent_slug'	=> 'theme-general-settings',
			));
			acf_add_options_sub_page(array(
				'page_title' 	=> 'Uproar: Weather Alert',
				'menu_title'	=> 'Weather Alert',
				'parent_slug'	=> 'theme-general-settings',
			));
		}



?>