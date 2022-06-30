<?php
/*
Theme functions
This file include all php functions to be used on the admin and front end website
*/


//~ Creating menu to show in wp-admin Customizer

function theme_com_Menu()
{
  register_nav_menu('theme_com_Menu', __('Theme Menu'));
}
add_action('init', 'theme_com_Menu');



function prepare_post_object($pid)
{
  $item = new stdClass();
  $post = get_post($pid);
  if (isset($post->ID)) {
    $item->post = $post;
    $item->id = $post->ID;
    $item->title = $post->post_title;
    $item->image = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');
    $item->url = get_the_permalink($post->ID);
    $item->type = $post->post_type;
    $item->description = $post->post_excerpt;
    $post_type_data = get_post_type_object($post->post_type);
    $item->type_label = $post_type_data->label;
    $item->date = get_the_date('d-m-Y', $post);
  }

  return $item;
}
