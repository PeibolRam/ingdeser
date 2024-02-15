<?php 
  get_header(); 
?>

<?php the_content(); ?>

  <section class="hero-home">

    <div class="objetive-home-container parallax" style="background-image: url('<?php echo get_template_directory_uri()?>/img/hero-home.jpg');">
      <div class="overlay">
        <div class="content objetive-home-content">
          <h1>Más allá del buen servicio</h1>
          <p>Somo especialistas en mantenimiento, calibración y calificación de equipos de laboratorio.</p>
          <p>Con un plnatilla de expertos con <strong>más de 10 años de experiencia</strong> generando excelentes resultados.</p>
          <a href="/contact" class="btn">Contactanos</a>
        </div>
      </div>
    </div>
  </section>

  <section class="content section fisrt-home text-center">
    <h1 class="section-title">Nuestra oferta</h1>

    <div class="first-home-icons ">
      <div class=" content">
        <div class="first-home-content">
          <div class="first-home-txt" data-aos="fade-up" data-aos-delay="400">
            <img src="<?php echo get_template_directory_uri()?>/img/tranquilidad.svg" alt="" >
            <p><span style="font-weight:bold;color:#D25F15;">Tranquilidad: </span>Evitando que arriesgue recursos económicos, de tiempo y operación a través de un servicio de expertos calificados, que resuelven de forma rápida, eficiente y a menor costo.</p>
          </div>
          <div class="first-home-txt" data-aos="fade-up" data-aos-delay="300">
            <img src="<?php echo get_template_directory_uri()?>/img/comodidad.svg" alt="" >
            <p><span style="font-weight:bold;color:#D25F15;">Comodidad: </span>Teniendo un proveedor que está siempre disponible, dando seguimiento continuo y acompañando a su empresa para facilitar su operación.</p>
          </div>
          <div class="first-home-txt" data-aos="fade-up" data-aos-delay="200">
            <img src="<?php echo get_template_directory_uri()?>/img/atencion.svg" alt="">
            <p><span style="font-weight:bold;color:#D25F15;">Atención: </span>Un trato cercano, íntegro y comprometido siempre, en todos los acuerdo convenidos.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="services-home section text-center">
    <div class="services-home-txt content">
      <h1 class="section-title">Nuestros servicios</h1>
      <p class="section-subtitle">Brindamos una amplia gama de servicios que apoyan las operciones de una gran cantidad de industrias</p>
    </div>
    <div class="grid-services content">
      <div class="item-services">
        <img src="<?php echo get_template_directory_uri()?>/img/mantenimiento-preventivo.svg" alt="Mantenimiento preventivo">
        <h2>Mantenimiento preventivo</h2>
      </div>
      <div class="item-services">
        <img src="<?php echo get_template_directory_uri()?>/img/mantenimiento-correctivo.svg" alt="Mantenimiento correctivo">
        <h2>Mantenimiento correctivo</h2>
      </div>
      <div class="item-services">
        <img src="<?php echo get_template_directory_uri()?>/img/calibracion.svg" alt="Calibracion">
        <h2>Calibración</h2>
      </div>
      <div class="item-services">
        <img src="<?php echo get_template_directory_uri()?>/img/calificacion-de-diseno.svg" alt="Calificación de diseño">
        <h2>Calificación de diseño</h2>
      </div>
      <div class="item-services">
        <img src="<?php echo get_template_directory_uri()?>/img/calificacion-de-instalacion.svg" alt="Calificación de instalación">
        <h2>Calificación de instalación</h2>
      </div>
      <div class="item-services">
        <img src="<?php echo get_template_directory_uri()?>/img/calificacion-de-operacion.svg" alt="Calificación de operación">
        <h2>Calificación de operación</h2>
      </div>
      <div class="item-services">
        <img src="<?php echo get_template_directory_uri()?>/img/calificacion-de-desempeño.svg" alt="Calificación de desempeño">
        <h2>Calificación de desempeño</h2>
      </div>
    </div>
  </section>


<? get_footer(); ?>