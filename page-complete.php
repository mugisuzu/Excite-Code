<?php get_header(); ?>

<!-- main -->
<main class="pageMain">
  <div class="pageHeading pageHeadingContact">
    <div class="pageHeading__inner">
      <h1 class="heading heading--secondary">
        <span class="heading__main">contact</span>
        <span class="heading__sub">お問い合わせ</span>
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
      <div class="complete">
        <div class="complete__inner">
          <p class="complete__message">THANK YOU FOR CONTACTING US.</p>
          <p class="complete__messageJp">お問い合わせありがとうございます。</p>
          <p class="complete__text">近日中に折り返しご連絡いたします。<br class="u-spOnly">今しばらくお待ちくださいますよう、よろしくお願い申し上げます。<br class="u-spOnly">万が一、ご回答メールが届かない場合は、送信トラブル等の可能性もありますので、大変お手数ではございますが、もう一度フォームよりお問い合わせいただくか、お電話にてお問い合わせをお願いいたします。<br class="u-spOnly">今後ともご愛顧賜りますようよろしくお願い申し上げます。</p>
          <div class="complete__button">
            <a href="<?php echo esc_url(home_url('/')) ?>" class="complete__link btn prevArrow prevArrow--white">TOPへ戻る</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- /.main -->
<?php get_footer(); ?>
