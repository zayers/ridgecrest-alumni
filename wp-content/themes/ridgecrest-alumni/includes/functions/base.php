<?php

add_theme_support( 'post-thumbnails' ); 

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function custom_excerpt_length( $length ) {
return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



//By Default WP Compresses to 90. Let's kick it up to 100.
add_filter( 'jpeg_quality', 'better_jpeg_quality' );
function better_jpeg_quality() {
	return 100;
}

// Use Relative Image Links
add_filter('get_image_tag', 'theme_get_image_tag');
function theme_get_image_tag($html) 
{
    return str_replace(get_bloginfo('url'), '', $html);
}

//Current Page Slug
function the_slug() {
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
}

//Parent Page Slug
function the_parent_slug() {
  global $post;
  if($post->post_parent == 0) return '';
  $post_data = get_post($post->post_parent);
  return $post_data->post_name;
}

	
?>