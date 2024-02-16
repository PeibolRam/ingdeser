<?php

function tn_setup() {
  // Custom logo
  add_theme_support( 'custom-logo' );
  //Images
  add_theme_support('post-thumbnails');
  // SEO 
  add_theme_support('title-tag');
}

add_action("after_setup_theme", "tn_setup");

function tn_menus() {
  register_nav_menus(array(
    'main-menu' => __('Main menu', 'ingdeser'),
    'footer-menu' => __('Footer menu','ingdeser')
  ));
}

add_action("init", "tn_menus");

function cargar_jquery() {
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'cargar_jquery');

function tn_scripts_styles() {
  wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css',array(), '8.0.1');
  wp_enqueue_style('style',  get_stylesheet_uri(), array('normalize'), '1.0.0'); 
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js' , array(), '1.0',  false );
  wp_enqueue_script( 'header_script', get_template_directory_uri() . '/js/header.js' , array(), '1.0',  false );

}

add_action("wp_enqueue_scripts", "tn_scripts_styles");

