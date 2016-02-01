<?php 

	//UPROAR
		function uproar_scripts_styles() {
			
			  
			    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			        wp_enqueue_script( 'comment-reply' );	
			
			    /*   CALL ALL SCRIPTS FOR SITE */
			    wp_enqueue_script( 'uproar_plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), false, true );	
			    wp_enqueue_script( 'uproar_jquery_behaviors', get_template_directory_uri() . '/assets/js/jquery.behavior.js', array(), false, true );
			    if ( is_front_page() ) {
				    wp_enqueue_script( 'uproar_particles', get_template_directory_uri() . '/assets/js/particles.js', array(), false, true ); }
					
			    wp_enqueue_style('uproar_styles');
			}
			add_action( 'wp_enqueue_scripts', 'uproar_scripts_styles' );


	//EVENTS CALENDAR
		function bd_remove_ecp_styles() 
		{
			$styles = array(
				//'tribe-events-bootstrap-datepicker-css',
				'tribe-events-calendar-style', 
				'tribe-events-custom-jquery-styles',
				'tribe-events-calendar-style',
				'tribe-events-calendar-pro-style',
				'widget-calendar-pro-style',
				Tribe__Events__Main::POSTTYPE . '-widget-calendar-pro-style',
				Tribe__Events__Main::POSTTYPE . '--widget-calendar-pro-override-style',
				'widget-this-week-pro-style',
				Tribe__Events__Main::POSTTYPE . '-widget-this-week-pro-style'
				);
			wp_deregister_style( $styles );
		}
		add_action( 'wp_enqueue_scripts', 'bd_remove_ecp_styles', 100 );
		
	//WOOCOMMERCE
		function grd_woocommerce_script_cleaner() {
			// Remove the generator tag
			remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
			// Unless we're in the store, remove all the cruft!
			if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
				wp_dequeue_style( 'woocommerce_frontend_styles' );
				wp_dequeue_style( 'woocommerce-general');
				wp_dequeue_style( 'woocommerce-layout' );
				wp_dequeue_style( 'woocommerce-smallscreen' );
				wp_dequeue_style( 'woocommerce_fancybox_styles' );
				wp_dequeue_style( 'woocommerce_chosen_styles' );
				wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
				wp_dequeue_style( 'select2' );
				wp_dequeue_script( 'wc-add-payment-method' );
				wp_dequeue_script( 'wc-lost-password' );
				wp_dequeue_script( 'wc_price_slider' );
				wp_dequeue_script( 'wc-single-product' );
				wp_dequeue_script( 'wc-add-to-cart' );
				wp_dequeue_script( 'wc-cart-fragments' );
				wp_dequeue_script( 'wc-credit-card-form' );
				wp_dequeue_script( 'wc-checkout' );
				wp_dequeue_script( 'wc-add-to-cart-variation' );
				wp_dequeue_script( 'wc-single-product' );
				wp_dequeue_script( 'wc-cart' );
				wp_dequeue_script( 'wc-chosen' );
				wp_dequeue_script( 'woocommerce' );
				wp_dequeue_script( 'prettyPhoto' );
				wp_dequeue_script( 'prettyPhoto-init' );
				wp_dequeue_script( 'jquery-blockui' );
				wp_dequeue_script( 'jquery-placeholder' );
				wp_dequeue_script( 'jquery-payment' );
				wp_dequeue_script( 'fancybox' );
				wp_dequeue_script( 'jqueryui' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'grd_woocommerce_script_cleaner', 99 );

?>