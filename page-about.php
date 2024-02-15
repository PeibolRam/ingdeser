<?php 
  /*
  * Template name: About page
  */
  get_header(); 
?>

<?php the_content(); ?>

  <section class="">
    <div class="about-parallax-container parallax" style="background-image: url('https://thenext150.com//wp-content/uploads/2023/11/IMG_0829.png');">
        <div class="overlay">
          <div class="content objetive-home-content">
            <h1 style="margin-bottom: 20px;">About The Next 150</h1>
            <p style="margin-bottom: 20px;">We scale climate solutions in emerging markets to support the transition to a low-carbon economy.</p>
            <a href="/contact" class="btn">Join us today</a>
          </div>
        </div>
      </div>
  </section>

  <section class="">
    <div class="about-parallax-container parallax" style="background-image: url('https://thenext150.com//wp-content/uploads/2023/11/IMG_0591-scaled.jpg');">
        <div class="overlay">
          <div class="content objetive-home-content">
            <h1 style="margin-bottom: 20px;">Mobilizing strategic finance is key to forging a sustainable future</h1>
            <p style="margin-bottom: 20px;">The Next 150, established as a carbon removal venture developer and operator and based in Switzerland, is dedicated to making a significant impact in the realm of climate action, particularly in emerging economies.</p>
            <a href="/contact" class="btn">Join us today</a>
          </div>
        </div>
      </div>
  </section>

  <section class="">
    <div class="about-parallax-container parallax" style="background-image: url('https://thenext150.com//wp-content/uploads/2023/11/IMG_1618-scaled.jpg');">
        <div class="overlay">
          <div class="content objetive-home-content text-right">
            <div class="text-left about-mission">
              <p style="margin-bottom: 20px; width: 100%;">Our mission is twofold: to accelerate climate solutions through innovative financing and to harness the power of green technology in mitigating climate change. We focus on investments that not only contribute to environmental sustainability but also promise substantial financial returns. <br><br>
              Our approach is to bridge the gap between ambitious climate goals and practical, scalable solutions, bringing together the best in hardware, software, biotechnology, and innovation. <br><br>
              Our team, composed of seasoned finance and environmental technology experts, is committed to developing financial strategies that align with our client's goals and the larger objective of global decarbonization.</p>
              <a href="/contact" class="btn">Join us today</a>

            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="section fisrt-home text-center bg-gray">
    <div class="first-home-icons content">
      <div class=" content">
        <div class="first-home-content">
          <div class="first-home-txt column-about" data-aos="fade-up" data-aos-delay="400">
            <img src="https://thenext150.com//wp-content/uploads/2023/11/Group-43.png" alt="Purpose" >
            <h3>Core Purpose</h3>
            <p>We endeavor to expedite the shift towards a sustainable economy, extending operational acumen and securing sustainable financing for groundbreaking environmental initiatives.</p>
          </div>
          <div class="vertical-line-gray" data-aos="fade-up" data-aos-delay="350"></div>
          <div class="first-home-txt column-about" data-aos="fade-up" data-aos-delay="300">
            <img src="https://thenext150.com//wp-content/uploads/2023/11/Group-45.png" alt="Aspiration" >
            <h3>Our aspiration</h3>
            <p>Our aim is to offer individuals, as well as institutions in the public and private realms, a conduit for green investment in sustainable ventures possessing significant growth trajectories.</p>
          </div>
          <div class="vertical-line-gray" data-aos="fade-up" data-aos-delay="250"></div>
          <div class="first-home-txt column-about" data-aos="fade-up" data-aos-delay="200">
            <img src="https://thenext150.com//wp-content/uploads/2023/11/Group-44.png" alt="Strategy">
            <h3>The strategy</h3>
            <p>Our approach hinges on harnessing green finance to amplify the global footprint of local, climate-forward projects.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="founders section">
    <div class="section-title-container">
      <h1 class="section-title"><?php the_field('title_founders'); ?></h1>
      <p class="section-subtitle"><?php the_field('subtitle_founders'); ?></p>
    </div>
    <div class="founders-conatiner content">
      <div class="founder">
        <img src="<?php the_field('founder_image_1') ?>" alt="Founder">
        <div class="founder-content">
          <h2 class="founder-title"><?php the_field('founder_name_1') ?></h2>
          <h3>Founder</h3>
          <h3>Managing Director</h3>
          <a href="https://www.linkedin.com/in/patrick-atanasije-pineda-bb230b22" class="linkedin-member">
            <img src="<?php echo get_template_directory_uri()?>/img/linkedin-gray.png" alt="linkedin">
          </a>
          <p><?php the_field('founder_resume_1') ?></p>
        </div>
      </div>
      <div class="founder">
        <img src="<?php the_field('founder_image_2') ?>" alt="Founder">
        <div class="founder-content">
          <h2 class="founder-title"><?php the_field('founder_name_2') ?></h2>
          <h3>Founder</h3>
          <h3>Managing Director</h3>
          <a href="https://www.linkedin.com/in/constantin-ekierman-b000584b" class="linkedin-member">
            <img src="<?php echo get_template_directory_uri()?>/img/linkedin-gray.png" alt="linkedin">
          </a>
          <p><?php the_field('founder_resume_2') ?></p>
        </div>
      </div>
    </div>
  </section>

  <section class="founders-intro ">
    <div class="section-title-container">
      <h1 class="section-title">Team</h1>
      <p class="section-subtitle">Learn more about the talent & <br> people who make it all happen.</p>
    </div>
  
  <div class="about-team content">
    <?php
      $args = array(
        'post_type' => 'tn_team',
        'posts_per_page' => -1
      );

      $team = new WP_Query($args);

      while($team->have_posts()){
        $team-> the_post();
    ?>
      <div class="team-member">
        <?php the_post_thumbnail(); ?>
        <div class="team-member-info">
          <h5><?php the_title();?></h5>
          <?php the_excerpt(); ?>
          <?php if(get_field('linkedin') != null){ ?>
            <a href="<?php the_field('linkedin')?>" class="linkedin-member">
              <img src="<?php echo get_template_directory_uri()?>/img/linkedin-gray.png" alt="linkedin">
            </a>
          <?php } ?>
        </div>
      </div>
    
    <?php 
    }
    wp_reset_postdata();
    ?>

  </div>
  </section>

  
  <section class="partners-home section text-center">
    <div class="partners-home-txt content">
      <h1 class="section-title"><?php the_field('partners_title');?></h1>
      <p class="section-subtitle"><?php the_field('partners_subtitle');?></p>
    </div>
    <div class="companies-logos">
      <div class="carousel-container-autoplay">
        <div class="carousel-track">
          <?php
            $args = array(
              'post_type' => 'tn_partners'
            );

            $team = new WP_Query($args);

            while($team->have_posts()){
              $team-> the_post();
          ?>
          <div class="carousel-card">
            <?php the_post_thumbnail(); ?>
          </div>
          <?php 
          }
          wp_reset_postdata();
          ?>
          <?php
            $args = array(
              'post_type' => 'tn_partners'
            );

            $team = new WP_Query($args);

            while($team->have_posts()){
              $team-> the_post();
          ?>
          <div class="carousel-card">
            <?php the_post_thumbnail(); ?>
          </div>
          <?php 
          }
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="#" class="btn-invert">Learn more about our projects</a>
    </div>
  </section>

  <section class="section press-inquiries">
    <div class="content press-inquiries-container">
      <div class="section-title-container">
        <h1 class="section-title">Press inquiries</h1>
        <p class="section-subtitle">If you have a press inquiry regarding The Next 150 or its projects.</p>
      </div>
      <a href="/contact" class="btn btn-blue" style="margin-bottom: 10px;">Contact us</a>
      <a href="/contact" class="btn btn-blue">Download here our press kit</a>
    </div>
  </section>

<? get_footer(); ?>