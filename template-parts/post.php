<?php
    while( have_posts() ): the_post();       
        ?>
        <div class="post-content content">
          <h1 style="margin-bottom: 20px;"><?php the_title(); ?></h1>
          <?php 
          the_content(); ?>

        </div>

<?php endwhile;
    