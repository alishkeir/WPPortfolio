<?php

/**
 * Enqueue and localize theme scripts and styles
 *
 *
 * 
 */

namespace Beirut_com;

/**
 * Move jQuery to footer
 */
function move_jquery_into_footer($wp_scripts)
{
  if (!is_admin()) {
    $wp_scripts->add_data('jquery',         'group', 1);
    $wp_scripts->add_data('jquery-core',    'group', 1);
    $wp_scripts->add_data('jquery-migrate', 'group', 1);
  }
} // end move_jquery_into_footer

/**
 * Enqueue scripts and styles.
 */
function enqueue_theme_scripts()
{


  wp_enqueue_style(
    'styles',
    get_theme_file_uri('dist/bundle.css'),
    [],
    filemtime(get_theme_file_path('dist/bundle.css'))
  );

  // Enqueue jquery and front-end.js
  wp_enqueue_script('jquery-core');

  wp_register_script(
    'scripts',
    get_theme_file_uri('dist/index.bundle.js'),
    [],
    filemtime(get_theme_file_path('dist/index.bundle.js')),
    true
  );


  wp_register_script(
    'scripts',
    get_theme_file_uri('dist/bundle.bundle.js'),
    [],
    filemtime(get_theme_file_path('dist/bundle.bundle.js')),
    true
  );



  wp_localize_script('scripts', 'ajax_auth_object', [
    'ajaxurl' => admin_url('admin-ajax.php'),
    'redirecturl' => home_url(),
    'loadingmessage' => __('Sending user info, please wait...'),
  ]);




  wp_enqueue_script('scripts');
  wp_enqueue_script('styles');
}

/**
 * Load polyfills for legacy browsers
 */
function enqueue_polyfills()
{
  // Include polyfills
  $script = '
  var supportsES6 = (function () {
  try {
    new Function("(a = 0) => a");
    return true;
  } catch (err) {
    return false;
  }
  }());
  var legacyScript ="' . esc_url(get_theme_file_uri(get_asset_file('legacy.js'))) . '";
  if (!supportsES6) {
    var script = document.createElement("script");
    script.src = legacyScript;
    document.head.appendChild(script);
  }';

  if (file_exists(get_theme_file_path(get_asset_file('legacy.js')))) {
    wp_register_script('air_light_legacy', '', [], filemtime(get_theme_file_path(get_asset_file('legacy.js'))), false);
    wp_enqueue_script('air_light_legacy');
    wp_add_inline_script('air_light_legacy', $script, true);
  }
} // end enqueue_polyfills

/**
 * Returns the built asset filename and path depending on
 * current environment.
 *
 * @param string $filename File name with the extension
 * @return string file and path of the asset file
 */
function get_asset_file($filename)
{
  $env = 'development' === wp_get_environment_type() && !isset($_GET['load_production_builds']) ? 'dev' : 'dev'; // phpcs:ignore WordPress.Security.NonceVerification.Recommended

  $filetype = pathinfo($filename)['extension'];

  return "${filetype}/${env}/${filename}";
} // end get_asset_file
