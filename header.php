<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
  </head>
  <body>
  <header class="header-blue desktop" id="navbar-blue">
    <div class="content navbar-blue">
      <div class="logo">
        <a href="/">
          <img class="logo-img" src="<?php echo get_template_directory_uri()?>/img/isotipo.png" alt="Logo">
        </a>
      </div>
      <?php
        $args = array(
          'theme_location' => 'main-menu',
          'container' => 'nav',
          'container_class' => 'main-menu'
        );
        wp_nav_menu($args);
      ?>
      </div>
  </header>
    <header class="header" id="navbar">
      <div class="content navbar desktop">
        <div class="logo">
          <?php the_custom_logo(); ?>
        </div>
        <?php
          $args = array(
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'main-menu'
          );
          wp_nav_menu($args);
        ?>
      </div>
      
      <div class="mobile hamburger-content">
        <div class="hamburguer-menu" onclick="toggle(this)">
          <span class="line first-line"></span>
          <span class="line second-line"></span>
        </div>
        <div class="menu-expanded">
          <div class="logo">
            <?php the_custom_logo(); ?>
          </div>
          <?php
            $args = array(
              'theme_location' => 'main-menu',
              'container' => 'nav',
              'container_class' => 'hamburger-menu-container'
            );
            wp_nav_menu($args);
          ?>
        </div>
      </div>
    </header>

    