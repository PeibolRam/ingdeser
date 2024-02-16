<?php
    get_header();
?>

    <main class="section content first-section">
        <?php 
            $categoria = get_queried_object();
        ?>
        <h2 class="section-title text-center"><?php echo $categoria->name; ?></h2>
        <h3 class="section-subtitle">Subcategorias:</h3>
        <?php
          $list_subcat = array();
          if ( !empty($cat) ) $list_subcat = get_categories( ['hide_empty' => false, 'parent' => $cat] );

          if ( count($list_subcat)):

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

        
    </main>

<?php
    get_footer();
?>