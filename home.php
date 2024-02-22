<?php
    get_header();
?>

  <section class="">
  <div class="about-parallax-container parallax" style="background-image: url('http://www.ingdeser.com/wp-content/uploads/2024/02/about-scaled.jpg');">
      <div class="overlay">
        <div class="content objetive-home-content">
          <h1 style="margin-bottom: 20px;">Novedades</h1>
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
            'posts_per_page' => -1, // Número de posts a mostrar
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

<?php
    get_footer();
?>