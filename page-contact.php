<?php 
  /*
  * Template name: Contact page
  */
  get_header(); 
?>
<?php the_content(); ?>

  <section class="">
    <div class="about-parallax-container parallax" style="background-image: url('https://thenext150.com//wp-content/uploads/2023/11/IMG_0818-1.jpg');">
        <div class="overlay">
          <div class="content objetive-home-content">
            <h1 style="margin-bottom: 20px;">Let’s talk carbon opportunities</h1>
            <p style="margin-bottom: 20px;">We want to hear about you. Let’s connect.</p>
          </div>
        </div>
      </div>
  </section>

  <section class="section">
    <div class="content">
      <div class="section-title-container">
        <h1 class="section-title">Empower Your Future, Drive Sustainability</h1>
        <p class="section-subtitle">Embrace the future of business with our cutting-edge carbon solutions. We stand at the forefront of the green revolution, providing lucrative opportunities that drive profitability while contributing to a sustainable planet.</p>
      </div>

      <div class="future">
        <div class="future-content">
          <a href="#" class="btn">Capture CO2</a>
          <p>Unleash the power of innovation. Our carbon business opportunities leverage groundbreaking technologies to reduce emissions, create efficiencies, and build a cleaner, greener future.</p>
        </div>
        <div class="future-content">
          <a href="#" class="btn btn-invert">Green ventures</a>
          <p>Invest in projects that capture or eliminate carbon emissions, offsetting your environmental footprint while supporting initiatives with tangible, measurable results.</p>
        </div>
        <div class="future-content">
          <a href="#" class="btn btn-blue">Sustainable profit</a>
          <p>Sustainability meets profitability. Explore business opportunities that align with your values and promise substantial returns. It's a win-win for your business and the planet.</p>
        </div>
      </div>

    </div>
  </section>

  <section class="">
    <div class="about-parallax-container parallax" style="background-image: url('https://thenext150.com//wp-content/uploads/2023/11/IMG_0818.jpg');">
        <div class="overlay">
          <div class="content objetive-home-content contact-parallax">
            <div class="contact-parallax-content">
              <h1 style="margin-bottom: 20px;">News & Updates</h1>
              <p style="margin-bottom: 20px;">Subscribe to our newsletter for the latest information on The Next 150.</p>
            </div>
            <div class="contact-newsletter">
              <p>Sign Up for the Newsletter</p>
              <form action="procesar_suscripcion.php" method="POST">
                  <input type="email" placeholder="Email" id="correo" name="correo" required>
                  <input class="btn" type="submit" value="Submit">
              </form>
            </div>
          </div>
        </div>
      </div>
  </section>



  <section class="section">
    <div class="content">
      <div class="section-title-container">
        <h1 class="section-title">Propel Your Career, Drive Sustainability</h1>
        <p class="section-subtitle">At The Next 150, we're not just offering jobs; we're inviting you to be a part of a transformative journey. Join us in leading the charge toward a sustainable future, where your career aligns with purpose and innovation.</p>
      </div>

      <div class="future">
        <div class="future-content">
          <p>We are always on the lookout for passionate individuals who are eager to contribute to a sustainable future. If you're ready to be a part of something bigger, explore our current job openings at LinkedIn and start your journey with sustainability.</p>
          <a href="#" class="btn-blue" style="margin-left: 1em;">Carrers</a>
        </div>
      </div>

    </div>
  </section>

  <section class="section content"> 
    <div class="section-title-container">
      <h1 class="section-title">Follow us on LinkedIn</h1> 
    </div>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-787dc49a-ed46-44b7-acb7-4d938f05597d" data-elfsight-app-lazy></div>
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