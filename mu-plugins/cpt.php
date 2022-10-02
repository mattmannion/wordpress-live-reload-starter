<?php
function cpt()
{
  register_post_type('event', [
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'rewrite' => ['slug' => 'events'],
    'supports' => ['title', 'editor', 'excerpt'],
    'labels' => [
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event',
    ],
    'menu_icon' => 'dashicons-calendar'
  ]);
}

add_action('init', 'cpt');