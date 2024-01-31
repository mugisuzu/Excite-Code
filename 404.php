<?php get_header(); ?>
<!-- Main -->
<main class="pageMain">
  <div class="error">
    <div class="error__inner">

      <div class="error__body">
        <h2 class="error__heading">404 Not Found</h2>

        <div class="error__textBox u-pcOnly">
          <p class="error__text">お探しのページはURLが誤っているか、削除された可能性があります。<br>3秒後にTOPページに遷移します</p>
          <div class="error__button">
            <a class="error__link btn prevArrow prevArrow--white" href="<?php echo esc_url(home_url('/')) ?>">TOPへ戻る</a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="errorBody error__textBox u-spOnly">
    <p class="error__text">お探しのページはURLが誤っているか、削除された可能性があります。<br>3秒後にTOPページに遷移します</p>
    <div class="error__button">
      <a class="error__link btn prevArrow" href="<?php echo esc_url(home_url('/')) ?>">TOPへ戻る</a>
    </div>
  </div>
  
</main>
<?php get_footer(); ?>
