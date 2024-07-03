<?php
    get_header();
?>

    <main class="section content content-mob first-section">
        <?php 
            $categoria = get_queried_object();
        ?>
        <h2 class="section-title text-center"><?php echo $categoria->name; ?></h2>
        
        <?php
          $list_subcat = array();
          if ( !empty($cat) ) $list_subcat = get_categories( ['hide_empty' => false, 'parent' => $cat] );
          
          if ( count($list_subcat)):
            echo '<h3 class="section-subtitle">Subcategorias:</h3>';

            echo "<div class='subcat'>";
            foreach ($list_subcat as $item_subcat) {

              $category_link = get_category_link( $item_subcat->term_id );

              echo '<a href="'.$category_link.'">'.$item_subcat->name.'</a>';
            }
            echo "</div>";

          endif;
        ?>

        <h3 class="section-subtitle">Productos:</h3>
        <ul class="listado-grid">
            <?php
                while( have_posts() ) { 
                    the_post();
                    get_template_part('template-parts/blog');
                }
            ?>
        </ul>
        <div class="post-container">
        <?php

        // Verificar si estamos en una categoría específica
        if (is_category()) {
            // Obtener el ID de la categoría actual
            $category_id = get_queried_object_id();

            // Configurar la consulta para obtener el último post de la categoría actual
            $args = array(
                'cat' => $category_id,
                'posts_per_page' => 1, // Obtener solo un post
            );

            $latest_post_query = new WP_Query($args);

            // Si hay posts en la consulta
            if ($latest_post_query->have_posts()) {
                while ($latest_post_query->have_posts()) {
                    $latest_post_query->the_post(); // Configurar los datos del post actual

                    // Mostrar el contenido del post
                    ?>
                    <div class="latest-post">
                      <div class="post-category-content">
                          <h2><?php the_title(); // Título del post ?></h2>
                            <?php the_content(); // Contenido del post ?>
                        </div>
                    </div>
                    <?php
                }

                // Restaurar datos originales del post
                wp_reset_postdata();
            } else {
                echo '<p>No hay posts recientes en esta categoría.</p>';
            }
        }
        ?>

        </div>
        
    </main>

<?php
    get_footer();
?>