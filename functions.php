<?php

// actions
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

function adjust_queries($query)
{
  if (
    !is_admin() &&
    is_post_type_archive('event') &&
    $query->is_main_query()
  ) {
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', [
      'key' => 'event_date',
      'compare' => '>=',
      'value' => date('Ymd'),
      'type' => 'numeric'
    ]);
  }
}

add_action('pre_get_posts', 'adjust_queries');

// filters
function nav_active_class_main($classes)
{
  if (in_array('current-menu-item', $classes)) $classes[] = 'nav--active';

  return $classes;
}

add_filter('nav_menu_css_class', 'nav_active_class_main');

function nav_active_class_sub($classes, $menu_item)
{
  global $post;

  $classes[] = ($menu_item->url == get_post_type_archive_link($post->post_type))
    ? 'current-menu-item nav--active' : '';

  return $classes;
}
add_filter('nav_menu_css_class', 'nav_active_class_sub', 10, 2);