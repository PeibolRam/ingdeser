<!DOCTYPE html>
<!-- 
   ____             _            _               _           _            
  / __ \           | |          | |             | |         | |           
 | |  | |_   _  ___| |_ ______ _| | ___ ___   __| | ___   __| | _____   __
 | |  | | | | |/ _ \ __|_  / _` | |/ __/ _ \ / _` |/ _ \ / _` |/ _ \ \ / /
 | |__| | |_| |  __/ |_ / / (_| | | (_| (_) | (_| |  __/| (_| |  __/\ V / 
  \___\_\\__,_|\___|\__/___\__,_|_|\___\___/ \__,_|\___(_)__,_|\___| \_/                                                                                                                                                                                                                                                               
quetzalcode.dev
-->
<html <?php language_attributes(); ?>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
  </head>
  <body>
  <header class="header-blue desktop" id="navbar-blue">
    <div class="navbar-blue">
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
      <div class="navbar desktop">
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
              'theme_location' => 'main-menu-mobile',
              'container' => 'nav',
              'container_class' => 'hamburger-menu-container'
            );
            wp_nav_menu($args);
          ?>
          <a href="http://www.ingdeser.com/wp-content/uploads/2024/02/PRESENTACION-INGDESER-2023.pdf" class="btn" style="margin: 1em auto;" target="_blank">Presentación Corporativa</a>
        </div>
      </div>
    </header>

    