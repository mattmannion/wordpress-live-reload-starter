<?php get_header(); ?>

<div class="posts">
  <?php while (have_posts()) :
    the_post()
  ?>

    <h2>
      <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
    </h2>
    <div><?php the_excerpt() ?></div>

  <?php endwhile ?>
</div>

<?php get_footer() ?>