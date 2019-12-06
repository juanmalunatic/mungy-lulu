<footer class="footer content-info">
  <div class="container">
    <div class="row">
      <div class="footer__paws"></div>
      <div class="footer__block footer__block__menu    col-md-3">
        <?php
          wp_nav_menu([
            'theme_location' => 'footer_navigation',
            'menu_class' => 'nav footer__menu'
          ]);
        ?>
      </div>
      <div class="footer__block footer__block__phrase  col-md-6">
        <span class="footer__phrase">
          Love us & leave us
        </span>
      </div>
      <div class="footer__block footer__block__address col-md-3">
        <address class="footer__address">
          <a class="footer__address__block footer__address__block__email" href="luludogdaycare@gmail.com">
            luludogdaycare@gmail.com
          </a>
          <a class="footer__address__block footer__address__block__phone" href="tel:+14134649200">
            413-464-9200
          </a>
          <span class="footer__address__block footer__address__block__address">
            1525 West Housatonic St <br />
            Pittsfield MA 01201
          </span>
        </address>
      </div>
    </div>
  </div>
</footer>
