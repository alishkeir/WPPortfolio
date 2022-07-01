<?php

/**
 * Portfolio functions and definitions.
 *
 * @see https://developer.wordpress.org/themes/basics/theme-functions/
 */

/**
 * Register widget area.
 *
 * @since Webedia Alati 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */

function load_media_files()
{
  wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'load_media_files');
