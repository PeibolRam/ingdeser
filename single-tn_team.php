<?php get_header(); ?>
    <main class="content section">
      <div class="member-content content content-mob">
        <?php

          if (has_post_thumbnail()) {
            the_post_thumbnail('full',array('class' => 'member-hero-image'));
          }
        ?>
        <h1 class="section-title"><?php the_title(); ?></h1>
        <h2 class="section-subtitle"><?php the_excerpt(); ?></h2>

        <p><?php the_content(); ?></p>
              
      </div> 
    </main>
    
<? get_footer(); ?>