<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo('charset') ?>">
  <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
  <?php
  $nav_class = get_post_type() == 'post' ? "nav link__active" : "nav";
  wp_nav_menu([
    'theme_location' => 'headerMenu',
    'menu_class' => $nav_class
  ]) ?>
  </div>