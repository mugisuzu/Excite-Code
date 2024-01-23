document.addEventListener('DOMContentLoaded', function () {
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
});
