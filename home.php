<?php
    get_header();
?>

  <section class="">
  <div class="about-parallax-container parallax" style="background-image: url('https://thenext150.com//wp-content/uploads/2023/11/Group-98.png');">
      <div class="overlay">
        <div class="content objetive-home-content">
          <h1 style="margin-bottom: 20px;">News & updates from The Next 150</h1>
          <p style="margin-bottom: 20px;">Read our latest blogs and catch up with relevant news from the green economy sector.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="content">

    <?php
      $categories = get_categories(); // Obtén todas las categorías

      echo '<div class="btns-blog" id="filtro-categorias">'; // Contenedor del filtro
    
      foreach ($categories as $category) {
          echo '<button class="filtro-categoria" data-categoria="' . $category->slug . '">' . $category->name . '</button>';
      }
    
      echo '</div>';
      ?>

      <ul class="listado-grid blog-gird" id="blogs-container">
        <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6, // Número de posts a mostrar
            'orderby' => 'date',   // Ordenar por fecha
            'order' => 'DESC', 
          ); 
          $_posts = new WP_Query($args);
        ?>
        <?php if($_posts->have_posts()): ?>
          <?php while($_posts->have_posts()): $_posts->the_post(); get_template_part('template-parts/blog');?>
          <?php endwhile; ?>
        <?php endif;?>
      </ul>
      <?php
          the_posts_pagination();
      ?>
    </div>

  </section>

  <section class="section content"> 
    <div class="section-title-container">
      <h1 class="section-title">Follow us on LinkedIn</h1> 
    </div>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-787dc49a-ed46-44b7-acb7-4d938f05597d" data-elfsight-app-lazy></div>
  </section>

<?php
    get_footer();
?>