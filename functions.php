<?php

function main_files() {
  wp_enqueue_style('styles', get_stylesheet_uri());
  wp_enqueue_style('css', get_template_directory_uri() . '/dist/index.css');
  wp_enqueue_script('js', get_template_directory_uri() . '/dist/index.js');
}

add_action('wp_enqueue_scripts', 'main_files');
