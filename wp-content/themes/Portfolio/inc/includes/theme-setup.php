<?php

/**
 * Theme setup
 *
 * @Author: Niku Hietanen
 * @Date: 2020-02-20 13:46:50
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2021-05-04 11:13:01
 *
 * @package ALATI
 **/



/**
 * Build theme support
 */
function build_theme_support()
{
  add_theme_support('automatic-feed-links');
  add_theme_support('post-thumbnails');
  add_theme_support('wp-block-styles');
  add_theme_support('align-wide');
  add_theme_support('title-tag');
  add_theme_support(
    'html5',
    [
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'script',
      'style',
    ]
  );
}


function load_media_files()
{
  wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'load_media_files');