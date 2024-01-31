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
      <div class="confirm">
        <div class="confirm__inner">
          <p class="confirm__text text">入力内容をご確認ください。</p>

          <div class="container">
            <?php echo do_shortcode('[contact-form-7 id="d6ad0e9" title="お問い合わせ確認"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>
<!-- /.main -->
<?php get_footer(); ?>
