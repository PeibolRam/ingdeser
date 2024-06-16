<?php 
  /*
  * Template name: Services
  */
  get_header(); 
?>

<?php the_content(); ?>

  <section class="services-home section text-center">
    <div class="services-home-txt content">
      <h1 class="section-title">Nuestros servicios</h1>
      <p class="section-subtitle">Brindamos una amplia gama de servicios que apoyan las operaciones de una gran cantidad de industrias, entre las cuales se encuentran:</p>
      <p class="section-subtitle">Laboratorios de investigación, desarrollo, microbiológicos, biotecnológicos, transferencia de tecnología, industriales, aseguramiento de calidad, alimenticios, bebidas, químicos, cosmetológicos, petroleros, pinturas, sector público, médico, privado, clínico, agropecuario.</p>
    </div>
    <div class="grid-services content">
      <div class="item-services" data-aos="flip-left" data-aos-duration="400" >
        <img src="https://www.ingdeser.com/wp-content/uploads/2024/02/mantenimiento-preventivo.svg" alt="Mantenimiento preventivo">
        <h2>Mantenimiento preventivo</h2>
      </div>
      <div class="item-services" data-aos="flip-left" data-aos-duration="400" >
        <img src="https://www.ingdeser.com/wp-content/uploads/2024/02/mantenimiento-correctivo.svg" alt="Mantenimiento correctivo">
        <h2>Mantenimiento correctivo</h2>
      </div>
      <div class="item-services" data-aos="flip-left" data-aos-duration="400" >
        <img src="https://www.ingdeser.com/wp-content/uploads/2024/02/calibracion.svg" alt="Calibracion">
        <h2>Calibración</h2>
      </div>
      <div class="item-services" data-aos="flip-left" data-aos-duration="400" >
        <img src="https://www.ingdeser.com/wp-content/uploads/2024/02/calificacion-de-diseno.svg" alt="Calificación de diseño">
        <h2>Calificación de diseño</h2>
      </div>
      <div class="item-services" data-aos="flip-left" data-aos-duration="400" >
        <img src="https://www.ingdeser.com/wp-content/uploads/2024/02/calificacion-de-instalacion.svg" alt="Calificación de instalación">
        <h2>Calificación de instalación</h2>
      </div>
      <div class="item-services" data-aos="flip-left" data-aos-duration="400" >
        <img src="https://www.ingdeser.com/wp-content/uploads/2024/02/calificacion-de-operacion.svg" alt="Calificación de operación">
        <h2>Calificación de operación</h2>
      </div>
      <div class="item-services" data-aos="flip-left" data-aos-duration="400" >
        <img src="https://www.ingdeser.com/wp-content/uploads/2024/02/calificacion-de-desempeno.svg" alt="Calificación de desempeño">
        <h2>Calificación de desempeño</h2>
      </div>
    </div>
  </section>

  <section class="">
    <div class="" style="background-image: url('http://www.ingdeser.com/wp-content/uploads/2024/06/testalize-me-ZdToNCVLpOg-unsplash-min-scaled.jpg');">
        <div class="overlay">
          <div class="content services-content text-center">
            <h1 style="margin-bottom: 20px;" class="orange">Equipos</h1>
            <div class="services-equipos">
            <?php
            // Obtener todas las categorías
            $categories = get_categories(array(
                'hide_empty' => false, // Mostrar categorías aunque no tengan posts
            ));

            // Filtrar solo las categorías principales (sin subcategorías) y excluir "Uncategorized"
            $main_categories = array_filter($categories, function($cat) {
                return $cat->category_parent == 0 && $cat->slug != 'uncategorized';
            });

            if (!empty($main_categories)) {
                foreach ($main_categories as $category) {
                    ?>
                    <div class="category-box">
                        <h2><?php echo esc_html($category->name); ?></h2>
                        <p><?php echo esc_html($category->description); ?></p>
                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="category-link">Ver más</a>
                    </div>
                    <?php
                }
            } else {
                echo '<p>No hay categorías disponibles.</p>';
            }
            ?>
            </div>
          </div>
        </div>
      </div>
  </section>


<?php get_footer(); ?>