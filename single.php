<?php get_header(); ?>

<div class="single">
  <?php while (have_posts()) :
    the_post();
  ?>

    <h2><?php the_title() ?></h2>

    <div><?php the_content() ?></div>

  <?php endwhile; ?>
</div>

<?php get_footer(); ?>