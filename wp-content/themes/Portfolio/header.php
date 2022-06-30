<?php

/**
 * The header for our theme
 *
 *

 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8" />
  <meta name="robots" content="none" />
  <meta name="googlebot" content="none" />
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta name="viewport" content="minimum-scale=1.0, initial-scale=1.0, maximum-scale=1.0, width=device-width,  user-scalable=no" />
  <!-- Favicon -->



  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>
  <div class="wrapper">
    <?php
    get_template_part('template-parts/components/header/header', '', [])
    ?>