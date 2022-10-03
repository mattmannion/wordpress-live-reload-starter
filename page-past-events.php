<?php get_header(); ?>

<div class="posts">
  <div>
    <h1><?php the_archive_title('', ': Past Events') ?> </h1>
    <div><?php the_archive_description() ?></div>
  </div>

  <?php $q = new \WP_Query([
    'paged' => get_query_var('paged', 1),
    'posts_per_page' => 1,
    'post_type' => 'event',
    'meta_key' => 'event_date',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'meta_query' => [
      [
        'key' => 'event_date',
        'compare' => '<',
        'value' => date('Ymd'),
        'type' => 'numeric'
      ]
    ],
  ]) ?>

  <?php while ($q->have_posts()) : $q->the_post() ?>
  <div class="posts__post">
    <div class="posts__metabox">
      posted by <?php the_author_posts_link() ?>, &nbsp; <?php the_time('F j, Y') ?>
    </div>

    <h2>
      <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
    </h2>
    <div><?php the_excerpt() ?></div>

    <a class="posts__link" href="<?php the_permalink() ?>">See more &raquo;</a>
  </div>
  <?php endwhile ?>

  <div>
    <?php echo paginate_links([
      'total' => $q->max_num_pages,
    ]) ?>
  </div>

  <?php wp_reset_postdata() ?>

  <div class="posts__pagination">
    <?php echo paginate_links() ?>
  </div>
</div>

<?php get_footer() ?>