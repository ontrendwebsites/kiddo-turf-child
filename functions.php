<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/library/css/style.css' );
}

function add_files() {

  // wp_enqueue_script( 'gsap-script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', array(), '', true );
  // wp_enqueue_script( 'scrollto-script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollToPlugin.min.js', array(), '', true );
  // wp_enqueue_script( 'scrolltrigger-script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js', array(), '', true );
  // wp_enqueue_script( 'fontawesome-script', 'https://kit.fontawesome.com/9e1eea2b17.js', array(), '', true );

  // wp_enqueue_script( 'remodal-script', get_stylesheet_directory_uri() . '/library/remodal/remodal.min.js', array(), '' );
  // wp_enqueue_script( 'pushy-script', get_stylesheet_directory_uri() . '/library/js/pushy.js', array(), '', true );

  // // custom js
  // wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/library/js/custom.js', array(), '1.0', true);

  // wp_enqueue_style( 'remodal-style', get_stylesheet_directory_uri() . '/library/remodal/remodal.min.css', array(), '' );
  // wp_enqueue_style( 'remodal-themestyle', get_stylesheet_directory_uri() . '/library/remodal/remodal-default-theme.min.css', array(), '' );
  // wp_enqueue_style( 'pushy-style', get_stylesheet_directory_uri() . '/library/css/pushy.css', array(), '' );
  // wp_enqueue_style( 'hamburger-style', get_stylesheet_directory_uri() . '/library/css/hamburgers.css', array(), '' );

  // custom stylesheet
  wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/library/css/custom.css?v=7');
}

add_action( 'wp_enqueue_scripts', 'add_files' );

?>