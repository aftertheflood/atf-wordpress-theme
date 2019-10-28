<?php /* Template Name: About Page Template */ 
global $pageTag;
$pageTag = 'about';
wp_enqueue_style( 'style', get_stylesheet_uri() ); 
?>
<?php get_template_part('partials/html','top'); ?>

<div class="about-content">
  <?php if ( have_posts() ) :?>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
<?php get_template_part('partials/html','bottom'); ?>