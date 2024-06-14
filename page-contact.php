<?php 
  /*
  * Template name: Contact page
  */
  get_header(); 
?>
<div class="section contact-container" style="padding-top: 150px;">
  <div class="content-mob content">
    <h1><?php the_title(); ?></h1>
  
    <?php the_content(); ?>
  
    <div class="info-contact">
     <!-- <div class="info-contact-item">
        <h3>Dto. Ventas</h3>
        <p>Metztli Ortiz Zamorano</p>
        <a href="mailto:ventas@ingdeser.com">ventas@ingdeser.com</a>
        <a href="https://wa.link/ck1dml">5528495694</a>
      </div>-->
      <div class="info-contact-item">
        <h3>Administración</h3>
        <p>Alexis Martínez Tabla</p>
        <a href="mailto:a.tabla@ingdeser.com">a.tabla@ingdeser.com</a>
        <a href="https://wa.link/pbt3wt">5567459171</a>
      </div>
    </div>
  </div>

  </div>

<?php get_footer(); ?>
