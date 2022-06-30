<?php

/**
 * All hooks that are run in the theme are listed here
 *
 * 
 */

namespace Beirut_com;


/**
 * Scripts and styles associated hooks
 */
require get_theme_file_path('inc/hooks/scripts-styles.php');



// add_action('wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_polyfills');
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_theme_scripts');

// NB! If you use ajax functionality in Gravity Forms, remove this line
// to prevent Uncaught ReferenceError: jQuery is not defined
add_action('wp_default_scripts', __NAMESPACE__ . '\move_jquery_into_footer');
