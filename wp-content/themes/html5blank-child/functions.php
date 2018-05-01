<?php

  // De-register HTML5 Blank styles
  function html5blank_styles_make_child_active()
  {
  wp_deregister_style('html5blank'); // Enqueue it!
  wp_deregister_style('normalize'); // Enqueue it!
  }
  add_action('wp_enqueue_scripts', 'html5blank_styles_make_child_active', 100); // Add Theme Child Stylesheet

  function add_custom_styles()
  {
    wp_register_style('skeleton', 'https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css', array(), '2.0.4', 'all');
    wp_enqueue_style('skeleton'); // Enqueue it!

    wp_register_style('html5blank-child', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank-child'); // Enqueue it!
  }

  add_action('wp_enqueue_scripts', 'add_custom_styles');
?>
