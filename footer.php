      <footer class="page__footer">
        <div class="container">
              <div class="section">
                <header>
                  <h3>O společnosti</h3>
                </header>
                <p>
                  <?php
                  echo get_field('meta_description', $seoId);
                  ?>
                </p>
              </div>
              <div class="section">
                <header>
                  <h3>Kontaktujte nás</h3>
                </header>
                <ul class="page__footer-contactform">
                  <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:danporsokolov@volny.cz" title="Email">danporsokolov@volny.cz</a>
                  </li>
                  <li>
                    <i class="fa fa-phone"></i>
                    <a href="tel:+420352603122" title="Telefon">+420 352 603 122</a>
                  </li>
                  <li>
                    <i class="fa fa-phone"></i>
                    <a href="tel:+420777706986" title="Telefon">+420 777 706 986</a>
                  </li>
                </ul>
              </div>
              <div class="section">
                <header>
                  <h3>Navigace</h3>
                </header>
                <?php
                $args = array(
                  'theme_location'=>'footer_menu',
                  'menu_class'=>'nav-footer',
                  'fallback_cb'=>false,
                  'depth'=>1
                );
                wp_nav_menu($args);
                ?>
              </div>
              <div class="section">
                <header>
                  <h3>Kam dále</h3>
                </header>
                <?php
                $args = array(
                  'theme_location'=>'footer_additional',
                  'menu_class'=>'nav-footer',
                  'fallback_cb'=>false,
                  'depth'=>0
                );
                wp_nav_menu($args);
                ?>
              </div>
            <div class="section section-large">
              <a href="http://www.zalozfirmu.cz/?aid=0155815001" title="ZalozFirmu.cz - Online zakládání firem">
                <img class="js-lazyload" data-reference="<?php echo CONST_TEMPLATEDIR;?>/resources/banner_zalozfirmu.jpg" alt="Založ Firmu">
              </a>
            </div>
        </div>
      </footer>
      <section class="page__copyright">
        <div class="container">
          <div class="section section-large">
            Vytvořil <a href="http://www.jirikralovec.cz" target="_blank" title="Jiří Královec">Jiří Královec</a>
          </div>
        </div>
      </section>
    </div>
    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function() {
        packageSchema.init();
        packageLazyload.init();
      });
    </script>
  </body>
</html>