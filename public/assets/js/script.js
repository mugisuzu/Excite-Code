document.addEventListener('DOMContentLoaded', function () {
  // ハンバーガーメニュー
  const burger = document.querySelector('#js-hamburger');
  const spMenu = document.querySelector('#js-spMenu');
  const body = document.querySelector('body');

  if (burger) {
    burger.addEventListener('click', () => {
      burger.classList.toggle('is-active');
      spMenu.classList.toggle('show');
      $(spMenu).toggleClass('panelactive'); //ナビゲーションにpanelactiveクラスを付与
      $('.circleBg').toggleClass('circleactive'); //丸背景にcircleactiveクラスを付与
      if (burger.classList.contains('is-active')) {
        body.style.overflow = 'hidden';
      } else {
        body.style.overflow = 'visible';
      }
    });
  }

  // fadeAnimation
  function fadeAnimation(el,cl) {
    $(el).each(function () {
      let elemPos = $(this).offset().top - 50;
      let scroll = $(window).scrollTop();
      let windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).addClass(cl);
      }
    });
  }

  // 画面をスクロールをしたら発火
  $(window).scroll(function () {
    fadeAnimation('.fadeUpTrigger','fadeUp'); /* アニメーション用の関数を呼ぶ*/
    fadeAnimation('.fadeLeftTrigger','fadeLeft'); /* アニメーション用の関数を呼ぶ*/
    fadeAnimation('.fadeRightTrigger','fadeRight'); /* アニメーション用の関数を呼ぶ*/
    fadeAnimation('.fadeDownTrigger','fadeDown'); /* アニメーション用の関数を呼ぶ*/
  }); // ここまで画面をスクロールをしたら動かしたい場合の記述

  // 画面をロードしたら発火
  $(window).on('load', function () {
    fadeAnimation('.logged-in', 'fadeIn'); /* アニメーション用の関数を呼ぶ*/
    fadeAnimation('.fadeTitle', 'fadeLeft'); /* アニメーション用の関数を呼ぶ*/
    fadeAnimation('.fadeTitleBg', 'fadeRight'); /* アニメーション用の関数を呼ぶ*/
  }); // ここまで画面をスクロールをしたら動かしたい場合の記述
});
