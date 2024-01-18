<?php
// 基本設定
/* CSSとJavaScriptの読み込み
** wpのjquery無効化,自作css,JavaScriptの読み込み*/
function my_script_init()
{ // WordPressに含まれているjquery.jsを読み込まない
  wp_deregister_script('jquery');
  // jsの読み込み google font css
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "1.0.1");
  wp_enqueue_style('NotoSansJP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap');
  wp_enqueue_style('Oswald', '//fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap');
  wp_enqueue_style('Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@400;500&&display=swap');
  wp_enqueue_style('font_awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
  wp_enqueue_style('splide_css', '//cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css');
  wp_enqueue_script('splide_js', '//cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js', "", "1.0.1", true);
  wp_enqueue_script('splide_extensions', '//cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.4.2/dist/js/splide-extension-auto-scroll.min.js', "", "1.0.1", true);
  wp_enqueue_script('main_js', get_template_directory_uri() . '/public/assets/js/script.js', array('jquery'), '1.0.1', true);
  wp_enqueue_style('style_css', get_template_directory_uri() . '/public/assets/css/style.css', array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'my_script_init');


// 機能追加
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // titleタグ自動生成
  add_theme_support('menus'); // メニューを追加
  add_theme_support('html5', array( // HTML5による出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');

// Contact Form 7
// Contact Form 7で自動挿入されるPタグ、brタグを削除
function wpcf7_autop_return_false()
{
  return false;
}
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');


/* メインクエリを変更する
** トップページの件数を変更*/
function my_pre_get_posts($query)
{
  //管理画面、メインクエリ以外には設定しない
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  //トップページの場合
  if ($query->is_home()) {
    $query->set('posts_per_page', 3);
    return;
  }
}
add_action('pre_get_posts', 'my_pre_get_posts');


//サムネイルがあるかどうか
function display_thumbnail($class)
{
  if (has_post_thumbnail()) {
    the_post_thumbnail('full' ,array('class' => $class));
  } else {
    // echo '<img src="' . get_theme_file_uri("/assets/img/common/noimage.png ") . '" decoding="async" loading="lazy" alt="NoImage画像">';
    echo '<img class="' . $class . '" src="'. esc_url(get_theme_file_uri( "/public/assets/images/single/no_img.jpg" )) . '"decoding="async" loading="lazy" alt="NoImage画像">';
  }
}


// スラッグの日本語禁止
function auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
  if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
    $slug = utf8_uri_encode($post_type) . '-' . $post_ID;
  }
  return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);
