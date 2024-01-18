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

  // // fadeAnimation
  // function fadeAnimation(el,cl) {
  //   $(el).each(function () {
  //     let elemPos = $(this).offset().top - 50;
  //     let scroll = $(window).scrollTop();
  //     let windowHeight = $(window).height();
  //     if (scroll >= elemPos - windowHeight) {
  //       $(this).addClass(cl);
  //     }
  //   });
  // }

  // // 画面をスクロールをしたら発火
  // $(window).scroll(function () {
  //   fadeAnimation('.fadeUpTrigger','fadeUp'); /* アニメーション用の関数を呼ぶ*/
  //   fadeAnimation('.fadeLeftTrigger','fadeLeft'); /* アニメーション用の関数を呼ぶ*/
  //   fadeAnimation('.fadeRightTrigger','fadeRight'); /* アニメーション用の関数を呼ぶ*/
  //   fadeAnimation('.fadeDownTrigger','fadeDown'); /* アニメーション用の関数を呼ぶ*/
  // }); // ここまで画面をスクロールをしたら動かしたい場合の記述

  // // 画面をロードしたら発火
  // $(window).on('load', function () {
  //   fadeAnimation('.logged-in', 'fadeIn'); /* アニメーション用の関数を呼ぶ*/
  // }); // ここまで画面をスクロールをしたら動かしたい場合の記述

  // splide
  if (document.querySelector('.home')) {
    new Splide('.firstView__splide', {
      type: 'loop',
      speed: 2500,
      arrows: false,
      pagination: false,
      autoplay: true,
      interval: 5000,
      direction: 'ttb',
      height: '100vh',
      drag: false,
    }).mount();
  }

  if (document.querySelector('.page-id-11')) {
    new Splide('.company__splide', {
      type: 'loop', // ループさせる
      arrows: false, // 矢印ボタンを非表示
      pagination: false, // ページネーションを非表示
      drag: false, // ドラッグ無効
      perPage: 3, // 表示するスライドの枚数
      // gap: 10,
      breakpoints: {
        768: {
          perPage: 2, // 画面幅768px未満で表示枚数1枚
          gap: 4,
        },
      },
      autoScroll: {
        speed: 0.5, // スクロール速度
        pauseOnHover: false, // カーソルが乗ってもスクロールを停止させない
      },
    }).mount(window.splide.Extensions);
  }

  if (document.querySelector('.page-id-12')) {
    new Splide('.Company__Splide', {
      type: 'loop', // ループさせる
      arrows: false, // 矢印ボタンを非表示
      pagination: false, // ページネーションを非表示
      drag: false, // ドラッグ無効
      perPage: 3, // 表示するスライドの枚数
      // gap: 10,
      breakpoints: {
        768: {
          perPage: 2, // 画面幅768px未満で表示枚数1枚
          gap: 4,
        },
      },
      autoScroll: {
        speed: 0.5, // スクロール速度
        pauseOnHover: false, // カーソルが乗ってもスクロールを停止させない
      },
    }).mount(window.splide.Extensions);
  }
});
