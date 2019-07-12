<?php /* Template Name: Home Page Template */ ?>
<?php 
global $pageTag;
$pageTag = 'home';
?>
<?php get_template_part('partials/html','top'); ?>
<div class="splash atf-grid">
  <div class="splash__intro">
<?php 
  /* The title and strap-line */
  if ( is_front_page() ) {	?>
  <h1 class="splash__intro__title"><?php bloginfo( 'name' ); ?></h1>
  <?php if ( get_bloginfo( 'description' ) ) : ?>
    <p class="splash__intro__description"><?php bloginfo( 'description' ); ?></p>
  <?php endif; ?>	
  <?php } ?>
  </div>
  <?php 
  /* The most recent journal post */
  $posts = get_top_post();
  while ( $posts->have_posts() ) : $posts->the_post(); ?>
    <div class="splash__promo">
      <div class="splash__promo__date"><?php the_date() ?></div>
      <h2 class="splash__promo__title"><?php the_title(); ?></h2>						
      <div class="splash__promo__excerpt"><?php the_excerpt(); ?></div>
      <a href="<?php the_permalink(); ?>" class="splash__promo__link">Read the journal post</a>
    </div>
  <?php endwhile; ?>
</div>

<?php /* case studies */ ?>
<div class="atf-grid">

</div>

<?php /* 2nd and 3rd journal posts */ ?>

<?php /* The most recent journal post */ ?>

<?php get_template_part('partials/html','bottom'); ?>