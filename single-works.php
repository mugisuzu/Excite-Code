<?php get_header(); ?>
<!-- pageMain -->
<main class="pageMain">
  <div class="pageWrap pageWrap--single">
    <?php if (function_exists('bcn_display')) { ?>
      <div class="breadcrumbWrap">
        <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
          <?php bcn_display(); ?>
        </div>
      </div>
    <?php } ?>

    <div class="pageContainer">
      <div class="singleWorks">
        <article class="post">
          <header class="post__header">
            <div class="post__meta">
              <?php
              $taxonomy_terms = get_the_terms($post->ID, 'genre');
              if ($taxonomy_terms) {
                $limit = 2; // 表示するカテゴリーの数を指定
                $count = 0;
                foreach ($taxonomy_terms as $taxonomy_term) {
                  if ($count < $limit) {
                    echo '<span class="tag"><a href="' . esc_url(get_term_link($taxonomy_term->term_id)) . '">' . esc_html($taxonomy_term->name) . '</a></span>';
                    $count++;
                  } else {
                    break; // 制限に達したらループを抜ける
                  }
                }
              }
              ?>
            </div>
            <h1 class="post__title"><?php the_title(); ?></h1>
            <time class="post__time time" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
          </header>
          <div class="post__content">
            <?php display_thumbnail('post__thumb'); ?>
            <div class="post__body">
              <?php the_content(); ?>
            </div>
          </div>
        </article>

        <div class="single__button">
          <a class="single__prev btn prevArrow" href="<?php echo esc_url(home_url('/works')) ?>">実績一覧へ戻る</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_template_part('template-parts/section', 'info'); ?>

<?php get_footer(); ?>
