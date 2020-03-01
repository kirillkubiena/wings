<footer>
    <div class="footer-wrapper container">
      <div class="footer-contact">
        <h1>Kontakt</h1>
        <h4>Adresa</h4>
        <p><?php the_field('adresa', 'option'); ?></p>
        <a href="<?php echo get_page_link( get_page_by_title('kontakt')); ?>#map">Zobrazit</a>
        <div class="footer-contact-phone">
          <h4>Telefon</h4>
          <a href="tel:+420735004997"><?php the_field('telefon', 'option'); ?></a>
        </div>
      </div>
      <div class="footer-open-hours">
        <h1>Otevírací hodiny</h1>
        <p>Pondělí <span><?php the_field('pondeli_cas', 'option'); ?></span></p>
        <p>Úterý <span><?php the_field('utery_cas', 'option'); ?></span></p>
        <p>Středa <span><?php the_field('streda_cas', 'option'); ?></span></p>
        <p>Čtvrtek <span><?php the_field('ctvrtek_cas', 'option'); ?></span></p>
        <p>Pátek <span><?php the_field('patek_cas', 'option'); ?></span></p>
        <p>Sobota <span><?php the_field('sobota_cas', 'option'); ?></span></p>
        <p>Neděle <span><?php the_field('nedele_cas', 'option'); ?></span></p>
      </div>
      <div class="footer-social">
        <h1>Sledujte nás</h1>
        <div class="footer-social-ig">
          <a href="https://www.instagram.com/wingskarvina" target="_blank">
            <img src="<?php bloginfo('template_url') ?>/images/ig.svg" alt="ig" /> <span>wingskarvina</span>
          </a>
        </div>
        <div class="footer-social-fb">
          <a href="https://www.facebook.com/wingskarvina/" target="_blank">
            <img src="<?php bloginfo('template_url') ?>/images/fb.svg" alt="fb" /> <span>wingskarvina</span>
          </a>
        </div>
      </div>
    </div>
    <div class="footer-line container"></div>
    <div class="footer-copyright container">
      <p>Wings &copy;2020</p>
      <p>
        Made by
        <a href="https://kirillkubiena.com" target="_blank">Kirill Kubiena</a>
      </p>
    </div>
  </footer>
  <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
  <?php wp_footer(); ?>
</body>
</html>