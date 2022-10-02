<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- <div class="nav">
    <div>
      <a class="nav__link" href="<?php echo site_url(); ?>">home</a>
    </div>
    <div>
      <a class="nav__link" href="<?php echo site_url("/about-us"); ?>">about us</a>
    </div>
    <div>
      <a class="nav__link" href="<?php echo site_url("/another-page") ?>">another page</a>
    </div>
    <div>
      <a class="nav__link" href="<?php echo site_url("/privacy-policy") ?>">privacy-policy</a>
    </div> -->
  <?php wp_nav_menu([
    'theme_location' => 'headerMenu',
    'menu_class' => 'nav'
  ]) ?>
  </div>