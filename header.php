<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php if (is_404()) : ?>
    <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url('/')); ?>">
  <?php endif; ?>

  <!-- fv -->
  <?php
  if (is_page('about')) {
    echo '"<link rel="preload" as="image" href="' . esc_url(get_theme_file_uri('/public/assets/images/about/title_bg.jpg')).'" />';
    echo '"<link rel="preload" as="image" href="' . esc_url(get_theme_file_uri('/public/assets/images/about/title_bg_sp.jpg')).'" />';
  } elseif (is_home()) {
    echo '"<link rel="preload" as="image" href="' . esc_url(get_theme_file_uri('/public/assets/images/news/title_bg.jpg')).'" />';
    echo '"<link rel="preload" as="image" href="' . esc_url(get_theme_file_uri('/public/assets/images/news/title_bg_sp.jpg')).'" />';
  } elseif (is_page('service')) {
    echo '"<link rel="preload" as="image" href="' . esc_url(get_theme_file_uri('/public/assets/images/service/title_bg.jpg')).'" />';
    echo '"<link rel="preload" as="image" href="' . esc_url(get_theme_file_uri('/public/assets/images/service/title_bg_sp.jpg')).'" />';
  } elseif (is_page('contact') || is_page('confirm') || is_page('complete')) {
    echo '"<link rel="preload" as="image" href="' . esc_url(get_theme_file_uri('/public/assets/images/contact/title_bg.jpg')).'" />';
    echo '"<link rel="preload" as="image" href="' . esc_url(get_theme_file_uri('/public/assets/images/contact/title_bg_sp.jpg')).'" />';
  } elseif (is_category()) {
    echo '"<link rel="preload" as="image" href="' . esc_url(get_theme_file_uri('/public/assets/images/news/title_bg.jpg')) . '" />';
    echo '"<link rel="preload" as="image" href="' . esc_url(get_theme_file_uri('/public/assets/images/news/title_bg_sp.jpg')) . '" />';
  } elseif (is_post_type_archive('works') || is_tax()) {
    echo '"<link rel="preload" as="image" href="' . esc_url(get_theme_file_uri('/public/assets/images/works/title_bg.jpg')) . '" />';
    echo '"<link rel="preload" as="image" href="' . esc_url(get_theme_file_uri('/public/assets/images/works/title_bg_sp.jpg')) . '" />';
  }
  ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- header -->
  <header class="header">
    <div class="header__inner">
      <?php if (is_front_page()) : ?>
        <h1 class="header__logo logo">
          <a class="logo__link" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/header/header_logo.svg')); ?>" width="258" height="180" decoding="async" alt="Excite Code" /></a>
        </h1>
      <?php else : ?>
        <div class="header__logo logo">
          <a class="logo__link" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/header/header_logo.svg')); ?>" width="258" height="180" decoding="async" alt="Excite Code" /></a>
        </div>
      <?php endif; ?>
      <button class="hamburger" id="js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="header__nav gnav">
        <ul class="gnav__list">
          <li class="gnav__item"><a class="gnav__link" href="<?php echo esc_url(home_url('/')); ?>">top</a></li>
          <li class="gnav__item"><a class="gnav__link" href="<?php echo esc_url(home_url('/about')); ?>">about</a></li>
          <li class="gnav__item"><a class="gnav__link" href="<?php echo esc_url(home_url('/service')); ?>">service</a></li>
          <li class="gnav__item"><a class="gnav__link" href="<?php echo esc_url(home_url('/works')); ?>">works</a></li>
          <li class="gnav__item"><a class="gnav__link" href="<?php echo esc_url(home_url('/news')); ?>">news</a></li>
        </ul>
        <div class="gnav__btn">
          <a class="gnav__btnLink btn" href="<?php echo esc_url(home_url('/contact')); ?>"><i class="fa-regular fa-envelope"></i><span>contact</span></a>
        </div>
      </nav>
      <!-- /.header__nav -->

      <div class="spMenu show" id="js-spMenu">
        <div class="spMenu__inner">
          <div class="spMenu__logo logo">
            <a href=" <?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/header/header_logo_sp_menu.svg')); ?>" width="114" height="80" decoding="async" alt="Excite Code" /></a>
          </div>

          <nav class="spMenu__nav">
            <ul class="spMenu__list">
              <li class="spMenu__item"><a class="spMenu__link" href="<?php echo esc_url(home_url('/')); ?>">top</a></li>
              <li class="spMenu__item"><a class="spMenu__link" href="<?php echo esc_url(home_url('/about')); ?>">about</a></li>
              <li class="spMenu__item"><a class="spMenu__link" href="<?php echo esc_url(home_url('/service')); ?>">service</a></li>
              <li class="spMenu__item"><a class="spMenu__link" href="<?php echo esc_url(home_url('/works')); ?>">works</a></li>
              <li class="spMenu__item"><a class="spMenu__link" href="<?php echo esc_url(home_url('/news')); ?>">news</a></li>
            </ul>
            <ul class="spMenu__sns sns">
              <li class="sns__item">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
              </li>
              <li class="sns__item">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
              </li>
              <li class="sns__item">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </li>
            </ul>
          </nav>
          <div class="circleBg"></div>
        </div>
      </div>
      <!-- /.spMenu -->
    </div>
  </header>
  <!-- /.header -->
