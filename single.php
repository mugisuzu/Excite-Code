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
      <div class="single">
        <div class="postWrap">
          <article class="post">
            <header class="post__header">
              <div class="post__meta">
                <?php
                $categories = get_the_category();
                if ($categories) {
                  $limit = 2; // 表示するカテゴリーの数を指定
                  $count = 0;
                  foreach ($categories as $category) {
                    if ($count < $limit) {
                      echo '<span class="tag">' . get_the_cat_link_name() . '</span>';
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
            <?php
            $prev_post = get_previous_post();
            if ($prev_post) :
            ?>
              <a class="single__prev btn prevArrow" href="<?php the_permalink($prev_post); ?>">前の記事へ</a>
            <?php endif; ?>

            <?php
            $next_post = get_next_post();
            if ($next_post) :
            ?>
              <a class="single__next btn nextArrow" href="<?php the_permalink($next_post); ?>">次の記事へ</a>
            <?php endif; ?>
          </div>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>
  </div>
</main>

<?php get_template_part('template-parts/section', 'info'); ?>

<?php get_footer(); ?>
