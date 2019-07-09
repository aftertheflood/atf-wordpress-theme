<?php
function wp_add_scripts() {
  wp_register_script( 'bundle', get_template_directory_uri().'/assets/js/bundle.js' );
  wp_enqueue_script('bundle');
}
  
add_action( 'wp_enqueue_scripts', 'wp_add_scripts' );  
?>