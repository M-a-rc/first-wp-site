<?php

  function first_site_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
  }
  add_action('after_setup_theme', 'first_site_theme_support');


  function first_site_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('firstsite-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css", array(), '5.2.1', 'all') ;
    wp_enqueue_style('firstsite-stylesheet', get_template_directory_uri() . "style.css", array('firstsite-bootstrap'), $version, 'all') ;
    wp_enqueue_style('firstsite-header', get_template_directory_uri() . "/assets/css/header.css", array('firstsite-bootstrap'), $version, 'all') ;
    wp_enqueue_style('firstsite-footer', get_template_directory_uri() . "/assets/css/footer.css", array('firstsite-bootstrap'), $version, 'all') ;
  }
  add_action('wp_enqueue_scripts', 'first_site_register_styles');






  function first_site_register_scripts(){
    wp_enqueue_style('firstsite-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js", array(), '5.2.1', 'all', true) ;
  }
  add_action('wp_enqueue_scripts', 'first_site_register_scripts');


  function first_site_menus(){
    $locations = array(
      'primary' => 'Desktop Primary Top',
      'footer' => 'Footer Menus'
    );
    register_nav_menus($locations);
  }
  add_action('init', 'first_site_menus')

?>
