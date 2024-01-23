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
  if (is_front_page() || is_page('about')) {
    wp_enqueue_style('splide_css', '//cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css');
    wp_enqueue_script('splide_js', '//cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js', "", "1.0.1", true);
    wp_enqueue_script('splide_extensions', '//cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.4.2/dist/js/splide-extension-auto-scroll.min.js', "", "1.0.1", true);
    wp_enqueue_script('slider_js', get_template_directory_uri() . '/public/assets/js/splide.js', array('jquery'), '1.0.1', true);
  }
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
    the_post_thumbnail('full', array('class' => $class));
  } else {
    echo '<img class="' . $class . '" src="' . esc_url(get_theme_file_uri("/public/assets/images/single/no_img.jpg")) . '"decoding="async" loading="lazy" alt="NoImage画像">';
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


// ループ内で取得するもの
// カテゴリー名取得(リンクなし)
function get_the_cat_name()
{
  $categories = get_the_category();
  if ($categories && !is_wp_error($categories) && isset($categories[0])) {
    return $categories[0]->name;
  }
  return '';
}

// カテゴリー名取得(リンク付き)
function get_the_cat_link_name()
{
  $categories = get_the_category();
  if ($categories && !is_wp_error($categories) && isset($categories[0])) {
    $cat_link = get_category_link($categories[0]->term_id);
    return '<a href="' . esc_url($cat_link) . '">' . esc_html($categories[0]->name) . '</a>';
  }
  return '';
}

// 親カテゴリー名のみ取得(リンクなし)
function get_the_parent_cat_name()
{
  $categories = get_the_category();
  foreach ($categories as $category) {
    // 親カテゴリーIDがない場合
    if ($category->parent === 0) {
      return esc_html($category->name);
    }
  }
  return '';
}

/* 親カテゴリー名のみ取得(リンク付き)
** aタグを出力するためspanで囲う */
function get_the_parent_cat_link_name()
{
  $cats = get_the_category();
  $parent_cat_name = ''; // 親カテゴリー名を格納する変数
  foreach ($cats as $cat) {
    // 親カテゴリーIDがない場合
    if ($cat->parent === 0) {
      $cat_link = get_category_link($cat->term_id);
      $parent_cat_name = '<a href="' . esc_url($cat_link) . '">' . esc_html($cat->name) . '</a>';
      break;
    }
  }
  return $parent_cat_name;
}

// 子カテゴリー名を全て取得(リンクなし)
function get_the_child_cat_name()
{
  $cats = get_the_category();
  $child_cat_names = array(); // 子カテゴリー名を格納する配列
  foreach ($cats as $cat) {
    // 親カテゴリーでない場合
    if ($cat->parent !== 0) {
      $child_cat_names[] = esc_html($cat->name);
    }
  }
  // 子カテゴリーが見つかった場合にリストを出力
  if (!empty($child_cat_names)) {
    $output = '<ul><li>' . implode('</li><li>', $child_cat_names) . '</li></ul>';
    return $output;
  }
  return '';
}

// 子カテゴリー名を全て取得(リンク付き)
function get_the_child_cat_link_name()
{
  $cats = get_the_category();
  $child_cat_links = array(); // 子カテゴリー名とリンクを格納する配列
  foreach ($cats as $cat) {
    // 親カテゴリーでない場合
    if ($cat->parent !== 0) {
      $cat_link = get_category_link($cat->term_id);
      $child_cat_links[] = '<a href="' . esc_url($cat_link) . '">' . esc_html($cat->name) . '</a>';
    }
  }
  // 子カテゴリーが見つかった場合にリストを出力
  if (!empty($child_cat_links)) {
    $output = '<ul><li>' . implode('</li><li>', $child_cat_links) . '</li></ul>';
    return $output;
  }
  return '';
}

// タグ名を全て取得(リンクなし)
function get_the_tags_name()
{
  $tags = get_the_tags();
  if ($tags) {
    echo '<ul>';
    foreach ($tags as $tag) {
      echo '<li>' . $tag->name . '</li>';
    }
    echo '</ul>';
  }
}

// タグ名を全て取得(リンク付き)
function get_the_tags_link_name()
{
  $tags = get_the_tags();
  if ($tags) {
    echo '<ul>';
    foreach ($tags as $tag) {
      $tag_link = get_tag_link($tag->term_id);
      echo '<li><a href="' . esc_url($tag_link) . '">' . esc_html($tag->name) . '</a></li>';
    }
    echo '</ul>';
  }
}

// ターム名取得(一つ、リンクなし)
function get_the_term_name($taxonomy)
{
  global $post;
  $terms = get_the_terms($post->ID, $taxonomy);
  if ($terms && !is_wp_error($terms) && !empty($terms)) {
    return $terms[0]->name;
  }
  return '';
}

// ターム名取得(一つ、リンク付き)
function get_the_term_link_name($taxonomy)
{
  global $post;
  $terms = get_the_terms($post->ID, $taxonomy);
  if ($terms && !is_wp_error($terms)) {
    $term = reset($terms); // 最初のタームを取得
    $term_link = get_term_link($term);
    if (!is_wp_error($term_link)) {
      return '<a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a>';
    }
  }
  return '';
}

// ターム名取得(全て、リンクなし)
function get_the_terms_name($post_id, $taxonomy)
{
  $terms = get_the_terms($post_id, $taxonomy);
  $output = '';
  if (!empty($terms)) {
    $output .= '<ul>';
    foreach ($terms as $term) {
      $output .= '<li>' . esc_html($term->name) . '</li>';
    }
    $output .= '</ul>';
  }
  return $output;
}

// ターム名取得(全て、リンク付き)
function get_the_terms_link_name($post_id, $taxonomy)
{
  $terms = get_the_terms($post_id, $taxonomy);
  $output = '';
  if (!empty($terms)) {
    $output .= '<ul>';
    foreach ($terms as $term) {
      $term_link = get_term_link($term);
      if (!is_wp_error($term_link)) {
        $output .= '<li><a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a></li>';
      } else {
        $output .= '<li>' . esc_html($term->name) . '</li>';
      }
    }
    $output .= '</ul>';
  }
  return $output;
}

// タームスラッグ取得
function get_the_term_slug($taxonomy)
{
  global $post;
  $terms = get_the_terms($post->ID, $taxonomy);

  if ($terms && !is_wp_error($terms) && isset($terms[0])) {
    return $terms[0]->slug;
  }
  return ''; // タームが見つからない場合は空の文字列を返す
}

// タイトルを調整して取得
function get_flexible_title($number)
{
  $value = get_the_title();
  $value = wp_trim_words($value, $number, '...');
  return $value;
}

// 抜粋文を調整して取得
function get_flexible_excerpt($number)
{
  $value = get_the_excerpt();
  $value = wp_trim_words($value, $number, '...');
  return $value;
}

// 本文を調整して取得
function get_flexible_content($number)
{
  $value = get_the_content();
  $value = wp_trim_words($value, $number, '...');
  return $value;
}

// サムネイル画像をURLで取得
function  get_img_url()
{
  $image_id = get_post_thumbnail_id();
  $image_url =
    wp_get_attachment_url($image_id);
  return $image_url;
}

// 特定の投稿記事を取得
function get_specific_posts($post_type, $number = -1)
{
  $args = array(
    'post_type' => $post_type,
    'posts_per_page' => $number,
  );
  $specific_posts = new WP_Query($args);
  return $specific_posts;
}

// 特定のターム記事を取得
function get_specific_term_posts($post_type, $taxonomy = null, $term = null, $number = -1)
{
  $args = array(
    'post_type' => $post_type,
    'tax_query' => array(
      array(
        'taxonomy' => $taxonomy,
        'field' => 'slug',
        'terms' => $term,
      ),
    ),
    'posts_per_page' => $number,
  );
  $specific_term_posts = new WP_Query($args);
  return $specific_term_posts;
}

//人気の記事を取得するために使う↓ここから下3つ
//①クローラーのアクセス判別
function is_bot()
{
  $ua = $_SERVER['HTTP_USER_AGENT'];
  $bot = array(
    "googlebot",
    "msnbot",
    "yahoo"
  );
  foreach ($bot as $bot) {
    if (stripos($ua, $bot) !== false) {
      return true;
    }
  }
  return false;
}

//②人気記事を出力する関数
function getPostViews($postID)
{
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count == '') {
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count . ' Views';
}
function setPostViews($postID)
{
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count == '') {
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//③人気記事を取得(任意の投稿タイプを入力)
function get_ranking_posts($post_type, $number)
{
  $args = array(
    'post_type' => $post_type,
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
    'posts_per_page' => $number,
  );
  return new WP_Query($args);
}

// 一つ目の記事を取得
function isFirst()
{
  global $wp_query;
  return ($wp_query->current_post === 0);
}
