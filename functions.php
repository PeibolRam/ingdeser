<?php

// ing

function ing_setup() {
  // Custom logo
  add_theme_support( 'custom-logo' );

  //Images
  add_theme_support('post-thumbnails');

  // SEO 
  add_theme_support('title-tag');
}

add_action("after_setup_theme", "ing_setup");

function ing_menus() {
  register_nav_menus(array(
    'main-menu' => __('Main menu', 'ingdeser'),
    'footer-menu' => __('Footer menu','ingdeser')
  ));
}

add_action("init", "ing_menus");

function cargar_jquery() {
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'cargar_jquery');

function ing_scripts_styles() {
  wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css',array(), '8.0.1');
  wp_enqueue_style('style',  get_stylesheet_uri(), array('normalize'), '1.0.0'); 
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js' , array(), '1.0',  false );

}

add_action("wp_enqueue_scripts", "ing_scripts_styles");

function ing_gallery() {
  echo '<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", () => { 
    const slider = document.querySelector(".slider-gallery");
    const dotsContainer = document.querySelector(".slider-dots-gallery");
    const slides = Array.from(document.querySelectorAll(".slide-gallery"));
    const dots = [];

    let currentSlide = 0;

    function updateSlider() {
      slider.style.transform = `translateX(-${currentSlide * 100}%)`;
      dots.forEach((dot, index) => {
        dot.classList.toggle("active", index === currentSlide);
      });
    }

    slides.forEach(() => {
      const dot = document.createElement("div");
      dot.classList.add("dot-gallery");
      dotsContainer.appendChild(dot);
      dots.push(dot);

      dot.addEventListener("click", () => {
        currentSlide = dots.indexOf(dot);
        updateSlider();
      });
    });

    updateSlider();

    slides[0].classList.add("active");
  });
 
  </script>';
}

add_action("wp_enqueue_scripts", "ing_gallery");


function wpb_hook_javascript_footer() {
  ?>
      <script>
        
        // header effect
        const navbar = document.getElementById("navbar");
        const navbarBlue = document.getElementById("navbar-blue");

        let prevScrollPos = window.scrollY;
        let isNavbarVisible = true;
        let isNavbarBlueVisible = false;

        window.addEventListener("scroll", () => {
            const currentScrollPos = window.scrollY;
            
            if (prevScrollPos > currentScrollPos) {
                // El usuario está haciendo scroll hacia arriba
                isNavbarVisible = true;
                isNavbarBlueVisible = false;
            } else {
                // El usuario está haciendo scroll hacia abajo
                isNavbarVisible = false;
                isNavbarBlueVisible = true;
            }
            console.log(isNavbarBlueVisible)
            prevScrollPos = currentScrollPos;

          // Cambiar el fondo a blanco cuando el usuario hace scroll hacia abajo
            if (isNavbarVisible) {
                navbar.style.backgroundColor = "#ffffff90";
            } else {
                navbar.style.backgroundColor = "#fff"; // Cambia el color de fondo a blanco
            }

            // Ocultar o mostrar la barra de navegación según la dirección del scroll
            if (isNavbarVisible) {
                navbar.style.top = "0";
            } else {
                navbar.style.top = "-120px";
            }

            // Ocultar o mostrar la barra de navegación azul según la dirección del scroll
            if (isNavbarBlueVisible) {
              navbarBlue.style.top = "0";
            } else {
              navbarBlue.style.top = "-120px";
            }

        });

        // Mostrar la barra de navegación cuando el cursor se acerca a la parte superior de la página
        // window.addEventListener("mousemove", (event) => {
        //     if (event.clientY < 50) {
        //       navbar.style.top = "0";
        //     }
        // });

      </script>
      
  <?php
}
add_action('wp_footer', 'wpb_hook_javascript_footer');




function agregar_script_filtro_categoria() {
  ?>
  <script>
      jQuery(document).ready(function($) {
          $('.filtro-categoria').on('click', function() {
            var categoria = $(this).data('categoria');

              $('.post').hide(); // Oculta todos los posts
              $('.post[data-categoria="' + categoria + '"]').show(); // Muestra solo los posts de la categoría seleccionada
          });
      });
  </script>
  <?php
}
add_action('wp_footer', 'agregar_script_filtro_categoria');
