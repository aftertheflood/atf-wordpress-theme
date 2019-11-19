<?php /* Template Name: Contact Page Template */ 
global $pageTag;
$pageTag = 'contact';
?>
<?php get_template_part('partials/html','top'); ?>
<div class="contact__content">
  <div class="contact__info">
    <h1><?php the_title(); ?></h1>
    <div class="the-contact-details">
      <p><strong>Phone:</strong> +44 (0)23 5678 9012</p>
      <p><strong>Email:</strong> info@aftertheflood.com</p>
    </div>
    <div class="the-map"></div>
  </div>
  <div class="contact__form">
    <?php if ( have_posts() ) :?>
      <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>

<?php get_template_part('partials/html','bottom'); ?>