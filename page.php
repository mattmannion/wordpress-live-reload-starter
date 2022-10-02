<?php get_header() ?>

<div class="page">

  <?php $parent_id = wp_get_post_parent_id(get_the_ID());
  if ($parent_id) : ?>
    <div>parent page:
      <a href="<?php echo get_permalink($parent_id) ?>">
        <?php echo get_the_title($parent_id); ?>
      </a>
    </div>
  <?php endif ?>

  <?php if (!$parent_id) : ?>
    <div class="children">
      <?php wp_list_pages([
        'title_li' => null,
        'child_of' => $parent_id ? $parent_id : get_the_ID(),
        'sort' => 'menu_order'
      ]) ?>
    </div>
  <?php endif ?>

  <?php while (have_posts()) : the_post() ?>
    <h2>
      <?php the_title() ?>
    </h2>
    <div><?php the_content() ?></div>

  <?php endwhile ?>


</div>
<?php get_footer() ?>