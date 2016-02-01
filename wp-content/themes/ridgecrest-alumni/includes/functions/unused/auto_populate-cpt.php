<?php

		function custom_tax_init(){

	    //set some options for our new custom taxonomy
	    $args = array(
	        'label' => __( 'Team Calendar' ),
	        'hierarchical' => true,
	        'capabilities' => array(
	            // allow anyone editing posts to assign terms
	            'assign_terms' => 'edit_posts',
	            /* but you probably don't want anyone
	            *  except admins messing with what
	            *  gets auto-generated! */
	            'edit_terms' => 'administrator'
	        )
	    );

	    // create the custom taxonomy and attach it to a custom post type
	    register_taxonomy( 'team-event', 'tribe_events', $args);
	}

	add_action( 'init', 'custom_tax_init' );

	function update_custom_terms($post_id) {

	    // only update terms if it's a post-type-B post
	    if ( 'teams' != get_post_type($post_id)) {
	        return;
	    }

	    // don't create or update terms for system generated posts
	    if (get_post_status($post_id) == 'auto-draft') {
	        return;
	    }

	    /*
	    * Grab the post title and slug to use as the new
	    * or updated term name and slug
	    */
	    $term_title = get_the_title($post_id);
	    $term_slug = get_post( $post_id )->post_name;

	    /*
	    * Check if a corresponding term already exists by comparing
	    * the post ID to all existing term descriptions.
	    */
	    $existing_terms = get_terms('team-event', array(
	        'hide_empty' => false
	        )
	    );

	    foreach($existing_terms as $term) {
	        if ($term->description == $post_id) {
	            //term already exists, so update it and we're done
	            wp_update_term($term->term_id, 'team-event', array(
	                'name' => $term_title,
	                'slug' => $term_slug
	                )
	            );
	            return;
	        }
	    }

	    /*
	    * If we didn't find a match above, this is a new post,
	    * so create a new term.
	    */
	    wp_insert_term($term_title, 'team-event', array(
	        'slug' => $term_slug,
	        'description' => $post_id
	        )
	    );
	}

	//run the update function whenever a post is created or edited
	add_action('save_post', 'update_custom_terms');




?>