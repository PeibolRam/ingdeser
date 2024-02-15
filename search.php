<?php
/*
Template Name: Search Page
*/
?>

<?php
get_header();
?>

<section class="">
  <div class="about-parallax-container parallax" style="background-image: url('https://thenext150.com//wp-content/uploads/2023/10/NXT-team-visitig-yubalcah-scaled.jpg');">
      <div class="overlay">
        <div class="content objetive-home-content">
        <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
          <h1 style="margin-bottom: 20px;">Search</h1>
          <div class="input-group">
            <input type="search" id="form1" class="form-control rounded" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'h3') ?>" placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>" />
            <input type="submit" class="btn btn-outline-warning" value="<?php echo esc_attr_x('Search', 'submit button') ?>" />
          </div>
        </form>
        </div>
      </div>
    </div>
</section>

<div class="content" style="margin-top:20px;">
  <div class="result-container">
    <?php if (have_posts()) :
      while (have_posts()) : the_post();
        // Your loop code
    ?>
      <div class="result-item">
        <a href="<?php the_permalink() ?>">
          <img src="<?php echo the_post_thumbnail_url('thumbnail') ?>" />
          <h2 class="text-white">
            <?php the_title(); ?>
          </h2>
        </a>
      </div>
    <?php endwhile;;
    wp_reset_postdata();

    ?>
    <?php endif;
    ?>

  </div>
</div>

<? get_footer(); ?>