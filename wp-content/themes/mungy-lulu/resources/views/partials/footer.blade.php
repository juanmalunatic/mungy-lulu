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
        <div class="footer__social">
          <a href="https://www.facebook.com/loveusandleaveus/" target="_blank">
            <span class="sr-only">Love Us & Leave Us - Facebook</span>
            <i class="fab fa-facebook"></i>
          </a>
          <a href="https://www.instagram.com/loveusandleaveus/" target="_blank">
            <span class="sr-only">Love Us & Leave Us - Instagram</span>
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
      <div class="footer__block footer__block__address col-md-3">
        <address class="footer__address">
          <a class="footer__address__block footer__address__block__email" href="luludogdaycare@gmail.com">
            luludogdaycare<wbr>@gmail.com
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
<div class="container-fluid" id="footer-mungy-site">
  <div class="row">
    <div class="col">
      2019 <span class="copyright">&copy;</span> Mungy Site
    </div>
  </div>
</div>
