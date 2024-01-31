    <!-- footer -->
    <footer class="footer">
      <div class="footer__inner">
        <div class="container">
          <div class="footer__logoArea">
            <div class="footer__right">
              <div class="footer__logo logo">
                <img src="<?php echo esc_url(get_theme_file_uri('/public/assets/images/footer/footer_logo.svg')); ?>" width="258" height="180" decoding="async" loading="lazy" alt="Excite Code" />
              </div>
              <ul class="footer__sns sns">
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
            </div>
            <p class="copyRight"><small>&copy;2022 ExciteCode Automobile</small></p>
          </div>

          <div class="footer__nav">
            <ul class="footer__list">
              <li class="footer__navItem"><a class="footer__navLink" href="<?php echo esc_url(home_url('/')); ?>">top</a></li>
              <li class="footer__navItem"><a class="footer__navLink" href="<?php echo esc_url(home_url('/about')); ?>">about</a></li>
              <li class="footer__navItem"><a class="footer__navLink" href="<?php echo esc_url(home_url('/service')); ?>">service</a></li>
              <li class="footer__navItem"><a class="footer__navLink" href="<?php echo esc_url(home_url('/works')); ?>">works</a></li>
              <li class="footer__navItem"><a class="footer__navLink" href="<?php echo esc_url(home_url('/news')); ?>">news</a></li>
              <li class="footer__navItem"><a class="footer__navLink" href="<?php echo esc_url(home_url('/contact')); ?>">contact</a></li>
              <li class="footer__navItem"><a class="footer__navLink" href="#">プライバシーポリシー</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- /.footer -->
    <?php wp_footer(); ?>
    </body>

    </html>
