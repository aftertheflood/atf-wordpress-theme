<?php /* Template Name: Contact Page Template */ 
global $pageTag;
$pageTag = 'contact';
?>
<?php get_template_part('partials/html','top'); ?>
<h1><?php the_title(); ?></h1>
<?php if ( have_posts() ) :?>
  <?php while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; ?>
<?php endif; ?>
</form>
<?php get_template_part('partials/html','bottom'); ?>