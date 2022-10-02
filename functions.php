<?php

function main_files()
{
  wp_enqueue_style('css', get_template_directory_uri() . '/dist/index.css');
  wp_enqueue_script('js', get_template_directory_uri() . '/dist/index.js', [], 1, true);
}

add_action('wp_enqueue_scripts', 'main_files');

function main_features()
{
  register_nav_menu('headerMenu', 'Header Menu');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'main_features');
