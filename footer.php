    <footer class="footer">
      <div class="footer-content text-center">
        <div class="footer-menu-content">
          <div class="footer-logo">
            <a href="/">
              <img class="logo-img" src="<?php echo get_template_directory_uri()?>/img/isotipo.png" alt="Logo">
            </a>      
          </div>
          <a href="http://www.ingdeser.com/wp-content/uploads/2024/02/PRESENTACION-INGDESER-2023-1.pdf" target="_blank" class="btn">Presentación Corporativa</a>
        </div>
        <div class="footer-conect">
        <?php
            $args = array(
              'theme_location' => 'footer-menu',
              'container' => 'nav',
              'container_class' => 'footer-menu'
            );
            wp_nav_menu($args);
          ?>
        </div>
      </div>
      <div class="footer-cr text-center">
        <p>© INGDESER. Todos los derechos reservados <?php echo date('Y'); ?></p>
      </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    
    <?php wp_footer();?>
  </body>
</html>