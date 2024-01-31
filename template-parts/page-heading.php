<?php
if (is_page('about')) {
  $name = 'About';
  $title = '私たちについて';
} elseif (is_home()) {
  $name = 'News';
  $title = 'お知らせ';
} elseif (is_page('service')) {
  $name = 'Service';
  $title = 'サービス紹介';
} elseif (is_page('contact') || is_page('confirm') || is_page('complete')) {
  $name = 'Contact';
  $title = 'お問い合わせ';
} elseif (is_category()) {
  $sub_title = 'お知らせ・カテゴリー別';
  $main_title = 'news';
} elseif (is_post_type_archive('works') || is_tax()) {
  $name = 'Works';
  $title = '実績紹介';
} else {
  $image = '';
  $title = 'タイトルが設定されていません';
}
?>

<div class="pageHeading pageHeading<?php echo $name; ?> fadeRightTrigger fadeTitleBg" style="opacity: 0;">
  <div class="pageHeading__inner fadeLeftTrigger fadeTitle animeDelay" style="opacity: 0;">
    <h1 class="heading heading--secondary fadeLeftTrigger fadeTitle animeDelay" style="opacity: 0;">
      <span class="heading__main"><?php echo $name; ?></span>
      <span class="heading__sub"><?php echo $title; ?></span>
    </h1>
  </div>
</div>
