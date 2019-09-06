<?php /* Template Name: Client Page Template */ 
global $pageTag;
$pageTag = 'clients';
?>
<?php 
 get_template_part('partials/html','top'); 
/* case studies */
  $post = get_post(10); 
  $content = apply_filters('the_content', $post->post_content); 
  echo $content;
?>
CLIENTS

<?php get_template_part('partials/html','bottom'); ?>