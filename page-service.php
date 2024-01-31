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
      <section class="pageService">
        <div class="page__message pageInner">
          <ul class="internalLink">
            <li class="internalLink__item"><a href="<?php echo esc_url(home_url('/service/#support')) ?>">購入サポート</a></li>
            <li class="internalLink__item"><a href="<?php echo esc_url(home_url('/service/#repair')) ?>">修理・整備</a></li>
            <li class="internalLink__item"><a href="<?php echo esc_url(home_url('/service/#inspection')) ?>">車検・点検</a></li>
          </ul>

          <div class="page__messageBody">
            <h2 class="page__messageTitle">お客様一人一人が求める<br />理想のカー ライフに寄り添います</h2>
            <p class="page__messageText text">
              様々な輸入車・国産車のメンテナンスのご相談から点検・整備まで、親切かつスピーディな対応を心がけ、あらゆる疑問や不安にお答えします。最新鋭の自社集中工場には、四輪アライメントをはじめ最新コンピューターと各ブランドに精通した熟練のサービススタッフを配置、フロ
              ントでは車種ブランド別の専用電話回線をご用意しております。
            </p>
          </div>
        </div>

        <section class="serviceMedia" id="#">
          <div class="serviceMedia__inner pageInner">
            <div class="container">
              <ul class="serviceMedia__list">
                <li class="serviceMedia__item" id="support">
                  <div class="serviceMedia__bodyWrap">
                    <div class="serviceMedia__body">
                      <h2 class="serviceMedia__heading">
                        <span class="serviceMedia__num">01</span>
                        <span class="serviceMedia__title">購入サポート</span>
                      </h2>
                      <p class="serviceMedia__text">国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。</p>
                    </div>
                    <div class="serviceMedia__imgWrap">
                      <picture>
                        <source srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/service/item_img01_sp.jpg')); ?>" media="(max-width: 768px)" />
                        <img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/service/item_img01.jpg')); ?>" width="1280" height="999" decoding="async" loading="lazy" alt="購入サポート" />
                      </picture>
                    </div>
                  </div>

                  <div class="serviceMedia__feature">
                    <h3 class="serviceMedia__featureHeading">
                      <span class="serviceMedia__featureTitleMain">features</span>
                      <span class="serviceMedia__featureTitleSub">特徴</span>
                    </h3>

                    <p class="serviceMedia__featureText text">
                      弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br />これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
                    </p>
                  </div>
                </li>
                <li class="serviceMedia__item" id="repair">
                  <div class="serviceMedia__bodyWrap">
                    <div class="serviceMedia__body">
                      <h2 class="serviceMedia__heading">
                        <span class="serviceMedia__num">02</span>
                        <span class="serviceMedia__title">修理・整備</span>
                      </h2>
                      <p class="serviceMedia__text">高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。</p>
                    </div>
                    <div class="serviceMedia__imgWrap">
                      <picture>
                        <source srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/service/item_img01_sp.jpg')); ?>" media="(max-width: 768px)" />
                        <img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/service/item_img02.jpg')); ?>" width="1280" height="999" decoding="async" loading="lazy" alt="修理・整備" />
                      </picture>
                    </div>
                  </div>

                  <div class="serviceMedia__feature">
                    <h3 class="serviceMedia__featureHeading">
                      <span class="serviceMedia__featureTitleMain">features</span>
                      <span class="serviceMedia__featureTitleSub">特徴</span>
                    </h3>

                    <p class="serviceMedia__featureText text">
                      弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
                    </p>
                  </div>
                </li>
                <li class="serviceMedia__item" id="inspection">
                  <div class="serviceMedia__bodyWrap">
                    <div class="serviceMedia__body">
                      <h2 class="serviceMedia__heading">
                        <span class="serviceMedia__num">03</span>
                        <span class="serviceMedia__title">車検・点検</span>
                      </h2>
                      <p class="serviceMedia__text">輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいならわたしたちへご相談ください。</p>
                    </div>
                    <div class="serviceMedia__imgWrap">
                      <picture>
                        <source srcset="<?php echo esc_url(get_theme_file_uri('/public/assets/images/service/item_img01_sp.jpg')); ?>" media="(max-width: 768px)" />
                        <img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/service/item_img03.jpg')); ?>" width="1280" height="999" decoding="async" loading="lazy" alt="車検・点検" />
                      </picture>
                    </div>
                  </div>

                  <div class="serviceMedia__feature">
                    <h3 class="serviceMedia__featureHeading">
                      <span class="serviceMedia__featureTitleMain">features</span>
                      <span class="serviceMedia__featureTitleSub">特徴</span>
                    </h3>

                    <p class="serviceMedia__featureText text">
                      弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </section>
    </div>
  </div>
</main>
<!-- /.main -->

<?php get_template_part('template-parts/section', 'info'); ?>

<?php get_footer(); ?>
