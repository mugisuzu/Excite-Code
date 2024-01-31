<?php get_header(); ?>
<!-- main -->
<main class="main">
  <!-- firstView -->
  <div class="firstView">
    <div class="firstView__inner">
      <div class="firstView__images">
        <div class="firstView__splide splide" role="group" aria-label="ファーストビューのスライダー">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/slider/fv_sp01.jpg')); ?>" />
                  <img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/slider/fv01.jpg')); ?>" width="2200" height="1400" decoding="async" alt="女性達がドライブしている様子" />
                </picture>
              </li>
              <li class="splide__slide">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/slider/fv_sp02.jpg')); ?>" />
                  <img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/slider/fv02.jpg')); ?>" width="2200" height="1400" decoding="async" alt="男性がドライブしている様子" />
                </picture>
              </li>
              <li class="splide__slide">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/slider/fv_sp03.jpg')); ?>" />
                  <img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/slider/fv03.jpg')); ?>" width="2200" height="1400" decoding="async" alt="男女がドライブしている様子" />
                </picture>
              </li>
              <li class="splide__slide">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/slider/fv_sp04.jpg')); ?>" />
                  <img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/slider/fv04.jpg')); ?>" width="2200" height="1400" decoding="async" alt="女性が車に腰掛けている様子" />
                </picture>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="firstView__title">
        <p class="firstView__text">あなたの</p>
        <p class="firstView__text">日常が目覚める</p>
      </div>
    </div>
  </div>
  <!-- /.firstView -->

  <div class="textAnime">
    <p>Good life for Good Car</p>
  </div>

  <!-- about -->
  <section class="about">
    <div class="about__inner inner">
      <div class="container">
        <div class="media">
          <div class="media__imgWrap">
            <img class="media__img" src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/AboutUs/img.jpg')); ?>" width="1100" height="960" decoding="async" loading="lazy" alt="車が停まっている写真" />
          </div>
          <div class="media__textWrap">
            <h2 class="media__heading">About us</h2>
            <div class="media__textBox">
              <p class="media__text text">
                弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
              </p>
              <div class="media__btn">
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="more btn nextArrow">read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.about section -->

  <section class="service">
    <div class="service__inner inner">
      <h2 class="heading heading--primary fadeRightTrigger">service</h2>

      <div class="container">
        <ul class="service__cards cards fadeLeftTrigger">
          <li class="card">
            <div class="card__imgWrap">
              <picture>
                <source srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/Service/img_sp01.jpg')); ?>" media="(max-width: 768px)" />
                <img class="card__img" src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/Service/img1.jpg')); ?>" width="710" height="340" decoding="async" loading="lazy" alt="service1 購入サポート" />
              </picture>
            </div>
            <div class="card__body">
              <p class="card__text text">国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。</p>
              <div class="card__btn">
                <a href="<?php echo esc_url(home_url('/service')); ?>" class="more btn nextArrow">read more</a>
              </div>
            </div>
          </li>
          <li class="card">
            <div class="card__imgWrap">
              <picture>
                <source srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/Service/img_sp02.jpg')); ?>" media="(max-width: 768px)" />
                <img class="card__img" src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/Service/img2.jpg')); ?>" width="710" height="340" decoding="async" loading="lazy" alt="service2 修理・整備" />
              </picture>
            </div>
            <div class="card__body">
              <p class="card__text text">高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。</p>
              <div class="card__btn">
                <a href="<?php echo esc_url(home_url('/service')); ?>" class="more btn nextArrow">read more</a>
              </div>
            </div>
          </li>
          <li class="card">
            <div class="card__imgWrap">
              <picture>
                <source srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/Service/img_sp03.jpg')); ?>" media="(max-width: 768px)" />
                <img class="card__img" src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/top/Service/img3.jpg')); ?>" width="710" height="340" decoding="async" loading="lazy" alt="service3 車検・点検" />
              </picture>
            </div>
            <div class="card__body">
              <p class="card__text text">輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいなら弊社へご相談ください。</p>
              <div class="card__btn">
                <a href="<?php echo esc_url(home_url('/service')); ?>" class="more btn nextArrow">read more</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- /.service section -->

  <section class="works">
    <div class="works__inner inner">
      <h2 class="heading heading--primary fadeLeftTrigger">works</h2>

      <div class="container">
        <?php
        $args = array(
          'post_type' => 'works',
          'posts_per_page' => 3,
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <ul class="worksMedia">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <li class="worksMedia__item fadeDownTrigger">
                <div class="worksMedia__imgWrap">
                  <?php display_thumbnail('worksMedia__img'); ?>
                </div>
                <div class="worksMedia__body">
                  <div class="worksMedia__tag">
                    <?php
                    $taxonomy_terms = get_the_terms($post->ID, 'genre');
                    if ($taxonomy_terms) {
                      $limit = 1; // 表示するカテゴリーの数を指定
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
                  <a href="<?php the_permalink(); ?>" class="worksMedia__link">
                    <h3 class="worksMedia__title hoverLine"><?php echo get_flexible_title(24); ?></h3>
                  </a>
                  <p class="worksMedia__text text">
                    <?php echo get_flexible_content(85); ?>
                  </p>
                  <time class="time" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <p>記事が投稿されていません</p>
        <?php endif; ?>
        <div class="works__btn">
          <a href="<?php echo esc_url(home_url('/works')); ?>" class="more btn nextArrow">read more</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /.works section -->

  <section class="news">
    <div class="news__inner inner">

      <div class="container">
        <div class="archive">
          <div class="archive__side">
            <h2 class="heading heading--primary fadeLeftTrigger">news</h2>
            <ul class="archive__categories fadeUpTrigger">
              <li class="archive__category current-cat"><a href="<?php echo esc_url(home_url('/news')) ?>">すべてのお知らせ</a></li>
              <?php
              $args = [
                'title_li' => '',
                'number' => 3,
              ];
              wp_list_categories($args);
              ?>
            </ul>
          </div>

          <div class="archive__main">
            <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 5,
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
              <ul class="archive__list">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <li class="archive__item fadeDownTrigger">
                    <div class="archive__body">
                      <time class="time" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                      <div class="archive__meta">
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
                      <a class="archive__link" href="<?php the_permalink(); ?>">
                        <h3 class="archive__title hoverLine"><?php echo get_flexible_title(35); ?></h3>
                      </a>
                    </div>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php else : ?>
              <p>記事が投稿されていません</p>
            <?php endif; ?>

            <div class="archive__btn">
              <a href="<?php echo esc_url(home_url('/news')); ?>" class="more btn nextArrow">read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- /.main -->

<?php get_template_part('template-parts/section', 'info'); ?>

<?php get_footer(); ?>
