<?php
function wp_add_scripts() {
  wp_register_script( 'scroll', get_template_directory_uri().'/assets/js/scroll.js' );
  wp_enqueue_script('scroll');
}
  
add_action( 'wp_enqueue_scripts', 'wp_add_scripts' );  
?>