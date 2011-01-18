<?php
/*
Plugin Name: MindValley Include Content
Plugin URI: http://mindvalley.com
Description: Creates shortcode [mv_include] to include content from another post/page.
Author: MindValley
Version: 1.0
*/

/**
 *  Usage
 *  [mv_include id='<page or post ID>']
 *
 */ 
function mv_includeContentShortcode( $atts ) {
	$thepostid = (int) $atts['id'];

	if ( !$post = get_post( $thepostid ) )
	    return '';

	return apply_filters( 'the_content', $post->post_content );
}

add_shortcode("mv_include", "mv_includeContentShortcode");