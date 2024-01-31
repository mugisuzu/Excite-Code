<?php get_header(); ?>
<!-- main -->
<main class="pageMain">

  <?php get_template_part('template-parts/page', 'heading'); ?>

  <div class="pageWrap">
    <?php if (function_exists('bcn_display')) { ?>
      <div class="breadcrumbWrap">
        <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
          <?php bcn_display(); ?>
        </div>
      </div>
    <?php } ?>

    <div class="pageContainer">
      <section class="pageAbout">
        <div class="page__message pageInner">
          <ul class="internalLink">
            <li class="internalLink__item"><a href="<?php echo esc_url(home_url('/about/#philosophy')) ?>">経営理念</a></li>
            <li class="internalLink__item"><a href="<?php echo esc_url(home_url('/about/#access')) ?>">アクセス</a></li>
            <li class="internalLink__item"><a href="<?php echo esc_url(home_url('/about/#company')) ?>">会社概要</a></li>
          </ul>


          <div class="page__messageBody">
            <h2 class="page__messageTitle">
              国境を超え、メーカーを超え<br />
              「型にはまらない」あなただけの歓びを
            </h2>
            <p class="page__messageText text">
              弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br class="u-pcOnly" />
              これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
            </p>
          </div>
        </div>

        <section class="philosophy section" id="philosophy">
          <div class="philosophy__inner pageInner">
            <div class="container">
              <div class="philosophy__media">
                <div class="philosophy__body">
                  <h2 class="philosophy__title pageTitle">
                    <span class="pageTitle__sub">経営理念</span>
                    <span class="pageTitle__main">philosophy</span>
                  </h2>
                  <p class="philosophy__text text">
                    「お客様とは一生涯のお付き合い」をモットーとし、同時に社員一人一人が責任と誇り、使命感を持ち日々の仕事にやりがいと喜びを感じることができる会社を目指します。そういう「社員満足」があってこそ、本当の「お客様に満足」が可能になり、そしてお客様のご満足がさらに社員の満足を高めてくれるからです。心の豊かさは楽とかゆとりとかいうより仕事の充実感に求めねばなりません。我々は現状に満足することなく挑戦し続けます。
                  </p>
                  <p class="philosophy__name text"><span>代表取締役</span><span>田中太郎</span></p>
                </div>
                <div class="philosophy__imgWrap">
                  <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/about/philosophy_sp.jpg')); ?>" media="(max-width: 768px)" />
                    <img class="philosophy__img" src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/about/philosophy.jpg')); ?>" width="720" height="1070" decoding="async" loading="lazy" alt="代表取締役 田中太郎" />
                  </picture>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="access" id="access">
          <div class="access__inner pageInner">
            <h2 class="access__title pageTitle">
              <span class="pageTitle__sub">アクセス</span>
              <span class="pageTitle__main">access</span>
            </h2>

            <div class="container">
              <address class="access__body text">
                <p class="access__post"><?php the_field('about_post'); ?></p>
                <p class="access__address"><?php the_field('about_address'); ?></p>
              </address>

              <div class="access__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3132.893048394887!2d140.87047342934574!3d38.2587864763734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8a283cf3d01199%3A0xe85370e5d54ac63e!2z44CSOTgwLTA4MTEg5a6u5Z-O55yM5LuZ5Y-w5biC6Z2S6JGJ5Yy65LiA55Wq55S6!5e0!3m2!1sja!2sjp!4v1702223388827!5m2!1sja!2sjp" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="GoogleMap"></iframe>
              </div>
            </div>
          </div>
        </section>

        <section class="company" id="company">
          <div class="company__inner pageInner">
            <h2 class="company__title pageTitle">
              <span class="pageTitle__sub">経営理念</span>
              <span class="pageTitle__main">company profile</span>
            </h2>

            <div class="container">
              <div class="companyOverview">
                <ul class="companyOverview__list text">
                  <li class="companyOverview__item">
                    <p class="companyOverview__heading">会社名</p>
                    <p class="companyOverview__text">株式会社Excitecode</p>
                  </li>
                  <li class="companyOverview__item companyOverview__item--address">
                    <p class="companyOverview__heading">所在地</p>
                    <p class="companyOverview__text"><span><?php the_field('about_post'); ?></span><span><?php the_field('about_address'); ?></span></p>
                  </li>
                  <li class="companyOverview__item">
                    <p class="companyOverview__heading">設立</p>
                    <p class="companyOverview__text">2015年12月10日</p>
                  </li>
                  <li class="companyOverview__item">
                    <p class="companyOverview__heading">代表取締役</p>
                    <p class="companyOverview__text">田中　太郎</p>
                  </li>
                  <li class="companyOverview__item">
                    <p class="companyOverview__heading">事業内容</p>
                    <div class="companyOverview__content">
                      <p class="companyOverview__text">自動車販売（新車、中古車）古物No.第00000000号</p>
                      <p class="companyOverview__text">自動車整備（国産車、輸入車）<br class="u-spOnly" /><span>陸運局認証工場</span><span>認証No.0-0000</span></p>
                      <p class="companyOverview__text">輸入車販売（自動車、自動車関連部品）</p>
                      <p class="companyOverview__text">保険代理店<br class="u-spOnly" />（ABC損害保険株式会社、DFG損害保険株式会社）</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="company__slide">
            <div class="splide company__splide">
              <div class="splide__track">
                <ul class="company__slideList splide__list">
                  <li class="company__slideItem splide__slide">
                    <picture>
                      <source srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/about/about_slider06_sp.jpg')); ?>" media="(max-width: 768px)" />
                      <img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/about/about_slider06.jpg')); ?>" width="960" height="800" decoding="async" loading="lazy" alt="バッテリー点検をしている様子" />
                    </picture>
                  </li>
                  <li class="company__slideItem splide__slide">
                    <picture>
                      <source srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/about/about_slider05_sp.jpg')); ?>" media="(max-width: 768px)" />
                      <img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/about/about_slider05.jpg')); ?>" width="960" height="800" decoding="async" loading="lazy" alt="車のキーを持っている様子" />
                    </picture>
                  </li>
                  <li class="company__slideItem splide__slide">
                    <picture>
                      <source srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/about/about_slider04_sp.jpg')); ?>" media="(max-width: 768px)" />
                      <img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/about/about_slider04.jpg')); ?>" width="960" height="800" decoding="async" loading="lazy" alt="お客様と接客している様子" />
                    </picture>
                  </li>
                  <li class="company__slideItem splide__slide">
                    <picture>
                      <source srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/about/about_slider03_sp.jpg')); ?>" media="(max-width: 768px)" />
                      <img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/about/about_slider03.jpg')); ?>" width="960" height="800" decoding="async" loading="lazy" alt="車をメンテナンスしている様子" />
                    </picture>
                  </li>
                  <li class="company__slideItem splide__slide">
                    <picture>
                      <source srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/about/about_slider02_sp.jpg')); ?>" media="(max-width: 768px)" />
                      <img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/about/about_slider02.jpg')); ?>" width="960" height="800" decoding="async" loading="lazy" alt="車を修理している様子" />
                    </picture>
                  </li>
                  <li class="company__slideItem splide__slide">
                    <picture>
                      <source srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/about/about_slider01_sp.jpg')); ?>" media="(max-width: 768px)" />
                      <img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/about/about_slider01.jpg')); ?>" width="960" height="800" decoding="async" loading="lazy" alt="車をコーティングしている様子" />
                    </picture>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </section>
    </div>
  </div>
</main>

<?php get_template_part('template-parts/section', 'info'); ?>

<?php get_footer(); ?>
