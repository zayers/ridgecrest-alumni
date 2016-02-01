<?php
	function sidebar_widgets() {
	
		register_sidebar( array(
			'name'          => 'Primary Sidebar',
			'id'            => 'primary_sidebar',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="sidebar-title">',
			'after_title'   => '</h3>',
		) );
	
	}
	add_action( 'widgets_init', 'sidebar_widgets' );
	
?>