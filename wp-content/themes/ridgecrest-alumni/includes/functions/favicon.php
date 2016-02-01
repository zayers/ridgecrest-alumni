<?php
	// First, create a function that includes the path to your favicon
	function add_favicon() {
	  	$favicon_url = get_template_directory_uri() . '/assets/images/favicons/favicon-96x96.png';
		echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
	}
	  
	// Now, just make sure that function runs when you're on the login page and admin pages  
	add_action('login_head', 'add_favicon');
	add_action('admin_head', 'add_favicon');
?>