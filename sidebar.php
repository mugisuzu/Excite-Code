<aside class="sidebar post__sidebar">
  <section class="sidebar__section newPost">
    <h2 class="sidebar__heading">最新記事</h2>
    <?php

    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 5,
      'post__not_in' => [get_the_ID()], // 現在表示している記事を除外
      "orderby" => "date",
      "order" => "DESC",
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
      <ul class="sidebar__list">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="sidebar__item">
            <div class="sidebar__imgWrap">
              <?php display_thumbnail('sidebar__img'); ?>
            </div>
            <div class="sidebar__body">
              <a class="sidebar__link" href="<?php the_permalink(); ?>">
                <h3 class="sidebar__title"><?php echo get_flexible_title(35); ?></h3>
              </a>
              <time class="sidebar__date time" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
            </div>
          </li>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </ul>
    <?php else : ?>
      <p>記事が投稿されていません</p>
    <?php endif; ?>
  </section>

  <section class="sidebar__section postArchive">
    <h2 class="sidebar__heading">アーカイブ</h2>
    <ul class="sidebar__list">
      <?php wp_get_archives('type = monthly & limit = 12'); ?>
    </ul>
  </section>

  <section class="sidebar__section postCategories">
    <h2 class="sidebar__heading">カテゴリー</h2>
    <ul class="sidebar__list">
      <?php
      $args = [
        'title_li' => '',
        'number' => 5,
      ];
      wp_list_categories($args);
      ?>
    </ul>
  </section>
</aside>
