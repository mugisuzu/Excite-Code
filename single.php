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

<div class="info">
  <div class="container">
    <div class="info__imgWrap">
      <picture>
        <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/footer/img_sp.jpg')); ?>" />
        <img class="info__img" src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/footer/img.jpg')); ?>" width="1640" height="892" decoding="async" loading="lazy" alt="" />
      </picture>
    </div>

    <div class="info__body">
      <div class="info__bodyInner">
        <p class="info__text">輸入車の購入や修理のご相談など<br />お気軽にお問い合わせください。</p>
        <div class="info__btn">
          <a class="btn bgLeft info__mail" href="#"><span><i class="fa-regular fa-envelope"></i><span class="info__btnText">お問い合わせ</span></span></a>
          <a class="btn bgLeft info__tel" href="#"><span><i class="fa-solid fa-phone"></i><span class="info__btnText">0000-000-000</span></span></a>
        </div>
        <p class="info__text">受付時間 : 火曜日を除く 10：00〜18：00</p>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
