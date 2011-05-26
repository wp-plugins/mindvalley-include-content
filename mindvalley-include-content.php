<?php
/*
Plugin Name: MindValley Include Content
Plugin URI: http://mindvalley.com
Description: Creates shortcode [mv_include] to include content from another post/page.
Author: MindValley
Version: 1.1.1
*/

/**
 *  Usage
 *  [mv_include id='<page or post ID>']
 *  or
 *  [mv_include slug='<page or post SLUG>']
 *
 */ 
function mv_includeContentShortcode( $atts ) {
	$thepostid = (int) $atts['id'];
	$thepostslug = $atts['slug'];
	$post  = (!empty($thepostid)) ? get_post( $thepostid ) : get_post_by_slug($thepostslug);
	if ( !$post )
	    return '';

	return apply_filters( 'the_content', $post->post_content );
}

if(!function_exists('get_post_by_slug')):
function get_post_by_slug($post_name, $output = OBJECT){
    global $wpdb;
    $post = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_name = %s AND (post_type = 'post' OR post_type='page')", $post_name ));
    if ( $post )
        return get_post($post, $output);

    return null;
}
endif;

add_shortcode("mv_include", "mv_includeContentShortcode");