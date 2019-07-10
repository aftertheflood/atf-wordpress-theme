<?php /* Template Name: About Page Template */ 
global $pageTag;
$pageTag = 'about';
wp_enqueue_style( 'style', get_stylesheet_uri() ); 
?>
<?php get_template_part('partials/html','top'); ?>
ABOUT
<?php get_template_part('partials/html','bottom'); ?>