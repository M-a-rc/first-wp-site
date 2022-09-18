<?php

  function first_site_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('firstsite-stylesheet', get_template_directory_uri() . "/style.css", array('firstsite-bootstrap'), $version, 'all') ;
    wp_enqueue_style('firstsite-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css", array(), '5.2.1', 'all') ;
    wp_enqueue_style('firstsite-fontawesome', "https://kit.fontawesome.com/d07f028ee8.js", array(), '6.2.0', 'all') ;
  }

  add_action('wp_enqueue_scripts', 'first_site_register_styles')

?>

<?php

  function first_site_register_scripts(){

    wp_enqueue_style('firstsite-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js", array(), '5.2.1', 'all', true) ;
  }

  add_action('wp_enqueue_scripts', 'first_site_register_scripts')

?>
