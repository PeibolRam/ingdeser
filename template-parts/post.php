<?php
    while( have_posts() ): the_post();       
    if(has_post_thumbnail()) {

      ?>
      <section class="">
        <div class="about-parallax-container parallax" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
            <div class="overlay">
              <div class="content objetive-home-content">
                <h1 style="margin-bottom: 20px;"><?php the_title(); ?></h1>
                
              </div>
            </div>
          </div>
      </section>
      <?
    }
        ?>
        
        
        <div class="post-content content">
          <?php 
          the_content(); ?>

        </div>

        <div class="meta-info">
            <p class="meta">
               <span>By: </span>
                <a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>">
                    <?php echo get_the_author_meta('display_name'); ?>
                </a>
            </p>
            <div class="categoria">
                <p class="meta">
                    <span>Category: </span>
                </p>
                <?php the_category(); ?>
                
            </div>

            <p class="meta">
                <span>Date: </span>
                <?php the_time( get_option('date_format') ); ?>
            </p>
        </div>
<?php endwhile;
    