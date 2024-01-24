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
