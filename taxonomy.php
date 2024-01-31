<?php
$taxonomy_slug = get_query_var('genre');
$genre = get_term_by('slug', $taxonomy_slug, 'genre');
?>

<?php get_header(); ?>
<!-- pageMain -->
<main class="pageMain">
  <div class="pageHeading pageHeadingWorks fadeRightTrigger fadeTitleBg" style="opacity: 0;">
    <div class="pageHeading__inner fadeLeftTrigger fadeTitle animeDelay" style="opacity: 0;">
      <h1 class=" heading heading--secondary fadeLeftTrigger fadeTitle animeDelay" style="opacity: 0;">
        <span class=" heading__main">works</span>
        <span class="heading__sub">実績紹介/<?php echo $genre->name; ?></span>
      </h1>
    </div>
  </div>

  <div class="pageWrap">
    <?php if (function_exists('bcn_display')) { ?>
      <div class="breadcrumbWrap">
        <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
          <?php bcn_display(); ?>
        </div>
      </div>
    <?php } ?>


    <div class="pageContainer">
      <section class="pageWorks">
        <div class="pageWorks__inner pageInner">
          <div class="archive archiveWorks">
            <div class="archive__side fadeUpTrigger">
              <ul class="archive__categories archive__categories--sticky">
                <li class="archive__category"><a href="<?php echo esc_url(home_url('/works')) ?>">すべての実績</a></li>
                <?php
                $args = [
                  'title_li' => '',
                  'number' => 3,
                  'taxonomy' => 'genre', //取得するタクソノミー
                ];
                wp_list_categories($args);
                ?>
              </ul>
            </div>


            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
              'post_type' => 'works',
              'posts_per_page' => 10,
              'paged' => $paged,
              'tax_query' => array(
                array(
                  'taxonomy' => 'genre',
                  'field' => 'slug',
                  'terms' => $taxonomy_slug,
                )
              )
            );
            $the_query = new WP_Query($args);
            ?>
            <div class="archive__main">
              <?php if ($the_query->have_posts()) : ?>
                <ul class="archive__list">
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="archive__item fadeDownTrigger">
                      <div class="archive__imgWrap">
                        <?php display_thumbnail(''); ?>
                      </div>

                      <div class="archive__body">
                        <div class="archive__meta archive__meta--gray">
                          <?php
                          $taxonomy_terms = get_the_terms($post->ID, 'genre');
                          if ($taxonomy_terms) {
                            $limit = 2; // 表示するカテゴリーの数を指定
                            $count = 0;
                            foreach ($taxonomy_terms as $taxonomy_term) {
                              if ($count < $limit) {
                                echo '<span class="tag"><a href="' . esc_url(get_term_link($taxonomy_term->term_id)) . '">' . esc_html($taxonomy_term->name) . '</a></span>';
                                $count++;
                              } else {
                                break; // 制限に達したらループを抜ける
                              }
                            }
                          }
                          ?>
                        </div>
                        <a class="archive__link" href="<?php the_permalink(); ?>">
                          <h3 class="archive__title hoverLine"><?php echo get_flexible_title(35); ?></h3>
                        </a>
                        <time class="time" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                      </div>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php else : ?>
                <p>記事が投稿されていません</p>
              <?php endif; ?>
              <?php if (function_exists('wp_pagenavi')) : ?>
                <div class="paginationWrapper">
                  <div class="pagination">
                    <?php wp_pagenavi(array('query' => $the_query)); ?>
                  </div>
                </div>
              <?php endif;
              wp_reset_postdata(); ?>

            </div>
          </div>
        </div>
    </div>
  </div>
  </section>
  </div>
  </div>
</main>

<?php get_template_part('template-parts/section', 'info'); ?>

<?php get_footer(); ?>
