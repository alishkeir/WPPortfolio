<?php
/*
 * Plugin Name: Portfolio Plugin
 * Description: Site specific code snippets for ThisIs Website
 * Author: 
 * Version: 1.0.0
*/
/* Start Adding Functions Below this Line */

//register custom post types & taxonomies
function register_admin_content_types_init()
{

  include __DIR__ . '/inc/registers/custom-post-types.php';
}

add_action('init', 'register_admin_content_types_init');

include __DIR__ . '/inc/metaboxes/social-network-metabox.php';
include __DIR__ . '/inc/metaboxes/video-metabox.php';


function wpcontent_svg_mime_type($mimes = array())
{
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'wpcontent_svg_mime_type');

function my_theme_custom_upload_mimes($existing_mimes)
{
  // Add webm to the list of mime types. $existing_mimes['webm'] = 'video/webm';
  // Return the array back to the function with our added mime type.
  $existing_mimes['svg'] = 'image/svg+xml';
  $existing_mimes['svgz'] = 'image/svg+xml';
  return $existing_mimes;
}
add_filter('mime_types', 'my_theme_custom_upload_mimes');
