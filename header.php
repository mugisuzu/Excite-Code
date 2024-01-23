<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- header -->
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo logo">
        <a class="logo__link" href="#"><img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/header/header_logo.svg')); ?>" width="258" height="180" decoding="async" alt="Excite Code" /></a>
      </h1>

      <button class="hamburger" id="js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="header__nav gnav">
        <ul class="gnav__list">
          <li class="gnav__item"><a class="gnav__link" href="#">top</a></li>
          <li class="gnav__item"><a class="gnav__link" href="#">about</a></li>
          <li class="gnav__item"><a class="gnav__link" href="#">service</a></li>
          <li class="gnav__item"><a class="gnav__link" href="#">works</a></li>
          <li class="gnav__item"><a class="gnav__link" href="#">news</a></li>
        </ul>
        <div class="gnav__btn">
          <a class="gnav__btnLink btn" href="#"><i class="fa-regular fa-envelope"></i><span>contact</span></a>
        </div>
      </nav>
      <!-- /.header__nav -->

      <div class="spMenu show" id="js-spMenu">
        <div class="spMenu__inner">
          <div class="spMenu__logo logo">
            <a href="#"><img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/header/header_logo_sp_menu.svg')); ?>" width="114" height="80" decoding="async" alt="Excite Code" /></a>
          </div>

          <nav class="spMenu__nav">
            <ul class="spMenu__list">
              <li class="spMenu__item"><a class="spMenu__link" href="#">top</a></li>
              <li class="spMenu__item"><a class="spMenu__link" href="#">about</a></li>
              <li class="spMenu__item"><a class="spMenu__link" href="#">service</a></li>
              <li class="spMenu__item"><a class="spMenu__link" href="#">works</a></li>
              <li class="spMenu__item"><a class="spMenu__link" href="#">news</a></li>
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
