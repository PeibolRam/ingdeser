<?php
    while( have_posts() ): the_post();       
        ?>
        <div class="post-content content">
          <h1 style="margin-bottom: 20px;"><?php the_title(); ?></h1>
          <?php 
          the_content(); ?>

        </div>

        <div class="meta-info">
            
            <div class="categoria">
                <p class="meta">
                    <span>Categoria: </span>
                </p>
                <?php the_category(); ?>
                
            </div>
        </div>
<?php endwhile;
    