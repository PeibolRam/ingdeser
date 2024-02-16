<?php 
  /*
  * Template name: Products page
  */
  get_header(); 
?>
<div class="content content-mob section" style="margin-top: 150px;">
  <h1><?php the_title(); ?></h1>

  <?php
  $categories = get_categories(array('type' => 'post','orderby' => 'name','order' => 'ASC','hide_empty' => false));
    $wp_cat = array();
        
    //Get categorys parents
    foreach($categories as $category){
        if($category->parent=="0" AND $category->slug != "uncategorized")
        {
            $wp_cat[$category->term_id] = array(
                                            "id"    => $category->term_id,
                                            "name"  => $category->name,
                                            "slug"  => $category->slug,
                                            "subcategorys" => array(),
                                        ); 
        }
    }
    ?>

    <?php
        $categorias_principales = get_categories(array(
            'parent' => 0 // Obtener solo categorías principales
        ));
      
          echo "<div class='subcat'>";
          foreach ($categorias_principales as $categoria) {
            $category_link = get_category_link( $categoria->term_id );
            echo '<a href="'.$category_link.'">'.$categoria->name.'</a>';
          }
          echo "</div>";

      ?>

  <?php the_content(); ?>
</div>

<? get_footer(); ?>