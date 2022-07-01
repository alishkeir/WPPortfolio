<?php
add_theme_support('post-thumbnails');

$supports = array(
  'title',
  'editor',
  'author',
  'thumbnail',
  'comments',
  'revisions',
  'post-formats',
);

// for rewrites and post name
$labels = array(
  'name' => _x('Videos', 'plural'),
  'singular_name' => _x('Videos', 'singular'),
  'menu_name' => _x('Videos', 'admin menu'),
  'name_admin_bar' => _x('Videos', 'admin bar'),
  'add_new' => _x('Add New', 'add new'),
  'add_new_item' => __('Add New videos'),
  'new_item' => __('New video'),
  'edit_item' => __('Edit video'),
  'view_item' => __('View video'),
  'all_items' => __('All videos'),
  'search_items' => __('Search videos'),
  'not_found' => __('No videos found.'),
);

$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'query_var' => true,
  'publicly_queryable' => true,
  'rewrite' => array('slug' => 'video',),
  'has_archive' => true,
  'hierarchical' => false,
);
register_post_type('video', $args);



// set up Skills labels
$labels = array(
  'name' => 'Skills',
  'singular_name' => 'Skill',
  'add_new' => 'Add New Skill',
  'add_new_item' => 'Add New Skill',
  'edit_item' => 'Edit Skill',
  'new_item' => 'New Skill',
  'all_items' => 'All Skills',
  'view_item' => 'View Skill',
  'search_items' => 'Search Skills',
  'not_found' =>  'No Skills Found',
  'not_found_in_trash' => 'No Skills found in Trash',
  'parent_item_colon' => '',
  'menu_name' => 'Skills',
);

// register post type
$args = array(
  'labels' => $labels,
  'public' => false,
  'show_in_nav_menus' => true,
  'has_archive' => false,
  'show_ui' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'rewrite' => array('slug' => 'skill'),
  'query_var' => true,
  'menu_icon' => 'dashicons-share',
  'menu_position' => 7,
  'supports' => array(
    'title',
  )
);
register_post_type('skill', $args);
