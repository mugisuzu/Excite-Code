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
      <div class="contact">
        <div class="contact__inner">
          <p class="contact__text text">弊社へのお問い合わせは<br />下記フォームより受け付けております。<br />担当者が確認後、折り返しご連絡させていただきます。</p>

          <div class="formWrap">
            <?php echo do_shortcode('[contact-form-7 id="5dce02e" title="お問い合わせ"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- /.main -->
<?php get_footer(); ?>
