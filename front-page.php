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
                <a href="#" class="more btn nextArrow">read more</a>
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
      <h2 class="heading heading--primary">service</h2>

      <div class="container">
        <ul class="service__cards cards">
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
                <a href="#" class="more btn nextArrow">read more</a>
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
                <a href="#" class="more btn nextArrow">read more</a>
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
                <a href="#" class="more btn nextArrow">read more</a>
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
      <h2 class="heading heading--primary">works</h2>

      <div class="container">
        <ul class="worksMedia">
          <li class="worksMedia__item">
            <div class="worksMedia__imgWrap">
              <img class="worksMedia__img" src="./public/assets/images/top/Works/img01.jpg" width="580" height="458" decoding="async" loading="lazy" alt="worksサムネイル" />
            </div>
            <div class="worksMedia__body">
              <div class="worksMedia__tag">
                <span class="tag">修理・整備</span>
              </div>
              <a href="#" class="worksMedia__link">
                <h3 class="worksMedia__title hoverLine">車のドアが開けられなくなった｜ドアロックの交換と...</h3>
              </a>
              <p class="worksMedia__text text">
                弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく...
              </p>
              <time class="time" datetime="2022-09-02">2022.09.02</time>
            </div>
          </li>
          <li class="worksMedia__item">
            <div class="worksMedia__imgWrap">
              <img class="worksMedia__img" src="./public/assets/images/top/Works/img01.jpg" width="580" height="458" decoding="async" loading="lazy" alt="worksサムネイル" />
            </div>
            <div class="worksMedia__body">
              <div class="worksMedia__tag">
                <span class="tag">修理・整備</span>
              </div>
              <a href="#" class="worksMedia__link">
                <h3 class="worksMedia__title hoverLine">車のドアが開けられなくなった｜ドアロックの交換と...</h3>
              </a>
              <p class="worksMedia__text text">
                弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく...
              </p>
              <time class="time" datetime="2022-09-02">2022.09.02</time>
            </div>
          </li>
          <li class="worksMedia__item">
            <div class="worksMedia__imgWrap">
              <img class="worksMedia__img" src="./public/assets/images/top/Works/img01.jpg" width="580" height="458" decoding="async" loading="lazy" alt="worksサムネイル" />
            </div>
            <div class="worksMedia__body">
              <div class="worksMedia__tag">
                <span class="tag">修理・整備</span>
              </div>
              <a href="#" class="worksMedia__link">
                <h3 class="worksMedia__title hoverLine">車のドアが開けられなくなった｜ドアロックの交換と...</h3>
              </a>
              <p class="worksMedia__text text">
                弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく...
              </p>
              <time class="time" datetime="2022-09-02">2022.09.02</time>
            </div>
          </li>
        </ul>
        <div class="works__btn">
          <a href="#" class="more btn nextArrow">read more</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /.works section -->

  <section class="news">
    <div class="news__inner inner">
      <h2 class="heading heading--primary">news</h2>

      <div class="container">
        <div class="archive">
          <div class="archive__side">
            <div class="archive__categories">
              <div class="archive__category current">すべてのお知らせ</div>
              <div class="archive__category">トピックス</div>
              <div class="archive__category">イベント・キャンペーン</div>
              <div class="archive__category">入庫車情報</div>
            </div>
          </div>

          <div class="archive__main">
            <ul class="archive__list">
              <li class="archive__item">
                <div class="archive__body">
                  <time class="time" datetime="2022-09-22">2022.09.02</time>
                  <div class="archive__meta"><span class="tag">トピックス</span><span class="tag">イベント・キャンペーン</span></div>
                  <a class="archive__link" href="#">
                    <h3 class="archive__title hoverLine">2022年10月8日・9日・10日の3日間、試乗車フェアを開催します</h3>
                  </a>
                </div>
              </li>
              <li class="archive__item">
                <div class="archive__body">
                  <time class="time" datetime="2022-09-22">2022.09.02</time>
                  <div class="archive__meta"><span class="tag">トピックス</span><span class="tag">イベント・キャンペーン</span></div>
                  <a class="archive__link" href="#">
                    <h3 class="archive__title hoverLine">2022年10月8日・9日・10日の3日間、試乗車フェアを開催します</h3>
                  </a>
                </div>
              </li>
            </ul>
            <div class="archive__btn">
              <a href="#" class="more btn nextArrow">read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
