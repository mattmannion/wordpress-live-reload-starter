<?php get_header(); ?>

<div class="posts">
  <?php while (have_posts()) : the_post() ?>

  <div class="posts__post">
    <div class="posts__metabox">
      posted by <?php the_author_posts_link() ?>,
      &nbsp; <?php the_time('F j, Y') ?> in <?php echo get_the_category_list(', ') ?>
    </div>

    <h2>
      <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
    </h2>
    <div><?php the_excerpt() ?></div>

    <a class="posts__link" href="<?php the_permalink() ?>">See more &raquo;</a>
  </div>
  <?php endwhile ?>

  <div class="posts__pagination">
    <?php echo paginate_links() ?>
  </div>
</div>

<?php get_footer() ?>