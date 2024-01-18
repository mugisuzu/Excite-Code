<?php get_header(); ?>
<!-- pageMain -->
<main class="pageMain">
  <div class="pageHeading pageHeadingNews">
    <div class="pageHeading__inner">
      <h1 class="heading heading--secondary">
        <span class="heading__main">news</span>
        <span class="heading__sub">お知らせ</span>
      </h1>
    </div>
  </div>

  <div class="pageWrap">
    <?php if (function_exists('bcn_display')) { ?>
      <div class="breadcrumbWrap">
        <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
          <?php bcn_display(); ?>
        </div>
      </div>
    <?php } ?>

    <div class="pageContainer">

      <section class="pageNews">
        <div class="pageNews__inner pageInner">
          <div class="archive">
            <div class="archive__side">
              <div class="archive__categories archive__categories--sticky">
                <div class="archive__category current">すべてのお知らせ</div>
                <div class="archive__category">トピックス</div>
                <div class="archive__category">イベント・キャンペーン</div>
                <div class="archive__category">入庫車情報</div>
              </div>
            </div>

            <div class="archive__main">
              <?php if (have_posts()) : ?>
                <ul class="archive__list">
                  <?php while (have_posts()) : the_post(); ?>
                    <li class="archive__item">
                      <div class="archive__body">
                        <time class="time" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                        <?php
                        $categories = get_the_category();
                        if ($categories);
                        ?>
                        <div class="archive__meta archive__meta--gray">
                          <?php foreach ($categories as $category) : ?>
                            <span class="tag"><a href="<?php echo get_category_link($category); ?>"><?php echo $category->name; ?></a></span>
                          <?php endforeach; ?>
                        </div>
                        <a class="archive__link" href="<?php the_permalink(); ?>">
                          <h3 class="archive__title hoverLine"><?php the_title(); ?></h3>
                        </a>
                      </div>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php else : ?>
                <p>記事が投稿されていません</p>
              <?php endif; ?>

              <?php if (function_exists('wp_pagenavi')) : ?>
                <div class="paginationWrapper">
                  <div class="pagination">
                    <?php wp_pagenavi(); ?>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>
      <!-- /.News -->
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
