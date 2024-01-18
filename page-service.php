<?php get_header(); ?>
<!-- main -->
<main class="pageMain">
  <div class="pageHeading pageHeadingService">
    <div class="pageHeading__inner">
      <h1 class="heading heading--secondary">
        <span class="heading__main">service</span>
        <span class="heading__sub">サービス紹介</span>
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
      <section class="pageService">
        <div class="page__message pageInner">
          <ul class="internalLink">
            <li class="internalLink__item"><a href="#">購入サポート</a></li>
            <li class="internalLink__item"><a href="#">修理・整備</a></li>
            <li class="internalLink__item"><a href="#">車検・点検</a></li>
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
                <li class="serviceMedia__item">
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
                <li class="serviceMedia__item">
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
                <li class="serviceMedia__item">
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
