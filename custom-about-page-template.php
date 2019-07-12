<?php /* Template Name: About Page Template */ 
global $pageTag;
$pageTag = 'about';
wp_enqueue_style( 'style', get_stylesheet_uri() ); 
?>
<?php get_template_part('partials/html','top'); ?>
<div class="splash atf-grid">
  <div class="splash__intro">
<?php /* The title and strap-line */ ?>
  <h1 class="splash__intro__title"><?php bloginfo( 'name' ); ?></h1>
  <?php if ( get_bloginfo( 'description' ) ) : ?>
    <p class="splash__intro__description"><?php bloginfo( 'description' ); ?></p>
  <?php endif; ?>
  </div>
</div>
<div class="bold-content atf-grid">
  <div class="bold-content__text">
  <?php if ( have_posts() ) :?>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</div>
<?php get_template_part('partials/html','bottom'); ?>