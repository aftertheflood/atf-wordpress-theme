<?php
function wp_add_scripts() {
  wp_register_script( 'bundle', get_template_directory_uri().'/assets/js/bundle.js' );
  wp_enqueue_script('bundle');
}

function get_category_post_range($category, $start, $count) {
  $params = array(
    'post_type' => 'post', 
    'orderby' => 'date', 
    'offset' => $start,
    'posts_per_page' => $count,
    'category_name' => $category
  );
  $posts = new WP_Query( $params );
  return $posts;
}

function get_excluding_category_post_range($category_ids, $start, $count) {
  $params = array(
    'post_type' => 'post', 
    'orderby' => 'date', 
    'offset' => $start,
    'posts_per_page' => $count,
    'category__not_in' => $category_ids
  );
  $posts = new WP_Query( $params );
  return $posts;
}

function get_child_category($postID, $targetParent, $before=""){
  foreach(wp_get_post_categories( $postID ) as $cat) {
    $parents = explode ( "/" , get_category_parents($cat));
    if($parents[0] == $targetParent && $parents[1]){
      echo $before.$parents[1];
    }
  }
  return '';
}

add_action( 'wp_enqueue_scripts', 'wp_add_scripts' );  
?>