<?php get_header() ?>

<div class="single">
  <?php while (have_posts()) : the_post() ?>

  <div class="metabox">
    posted by <?php the_author_posts_link() ?>,
    &nbsp; <?php the_time('F j, Y') ?> in <?php echo get_the_category_list(', ') ?>
  </div>

  <h2><?php the_title() ?></h2>

  <div class="metabox">
    <?php echo 'metabox' ?>
  </div>

  <div><?php the_content() ?></div>

  <?php endwhile ?>

  <div>
    <span>back to</span>
    <a href="<?php echo get_post_type_archive_link('event') ?>">
      <?php echo get_post_type() ?>
    </a>
  </div>
</div>
<?php get_footer() ?>