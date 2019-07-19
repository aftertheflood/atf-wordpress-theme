<?php
function wp_add_scripts() {
  wp_register_script( 'bundle', get_template_directory_uri().'/assets/js/bundle.js' );
  wp_enqueue_script('bundle');
}

function get_top_post() {
  $one_post = array( 
    'post_type' => 'post', 
    'orderby' => 'date', 
    'order' => 'ASC', 
    'posts_per_page' => 1,
    'category_name' => 'journal'
  );
  $posts = new WP_Query( $one_post );
  return $posts;
}

function get_journal_post_range($start, $count) {
  $params = array( 
    'post_type' => 'post', 
    'orderby' => 'date', 
    'order' => 'ASC',
    'offset' => $start,
    'posts_per_page' => $count,
    'category_name' => 'journal'
  );
  $posts = new WP_Query( $params );
  return $posts;
}

function get_client_posts($count) {
  $one_post = array( 
    'post_type' => 'post', 
    'orderby' => 'date', 
    'order' => 'ASC', 
    'posts_per_page' => $count,
    'category_name' => 'client'
  );
  $posts = new WP_Query( $one_post );
  return $posts;
}

add_action( 'wp_enqueue_scripts', 'wp_add_scripts' );  
?>