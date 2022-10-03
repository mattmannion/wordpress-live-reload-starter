<?php get_header() ?>

<div class="home">
  <?php while (have_posts()) : the_post() ?>

  <h2><?php the_title() ?></h2>
  <div><?php the_content() ?></div>

  <div>
    <?php $q1 = new \WP_Query(['posts_per_page' => 2]) ?>

    <?php while ($q1->have_posts()) : $q1->the_post() ?>
    <div>
      <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
    </div>
    <?php endwhile ?>
    <?php wp_reset_postdata() ?>
  </div>

  <div>
    <a href="<?php echo get_post_type_archive_link('post') ?>">see all &raquo;</a>
  </div>

  <div>
    <div>Upcoming Events:</div>
    <?php $q2 = new \WP_Query([
        'posts_per_page' => 2,
        'post_type' => 'event',
        'meta_key' => 'event_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'event_date',
            'compare' => '>=',
            'value' => date('Ymd'),
            'type' => 'numeric'
          ]
        ],
      ]) ?>

    <?php while ($q2->have_posts()) : $q2->the_post() ?>
    <div>
      <?php $eventDate = new DateTime(get_field('event_date')) ?>
      <?php echo $eventDate->format('F, d Y') ?> <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
    </div>
    <?php endwhile ?>
    <?php wp_reset_postdata() ?>
  </div>

  <div>
    <a href="<?php echo get_post_type_archive_link('event') ?>">see all &raquo;</a>
  </div>

  <?php endwhile ?>
</div>

<?php get_footer() ?>