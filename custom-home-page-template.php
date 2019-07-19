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
  $posts = get_journal_post_range(0,1);
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

<?php 
  /* The most recent journal post */
  $posts = get_client_posts(3);
  $count = 0;
  while ( $posts->have_posts() ) : 
    $posts->the_post(); 
    $count ++; ?>
  <div class="atf-grid <?php 
    if ($count % 2 == 0){
      echo 'promo-right';
    }else{
      echo 'promo-left';
    }
  ?>">
    <div class="client__promo promo__text">
      <div class="client__promo__sector"><?php echo get_post_meta($post->ID, 'client-sector', true);?></div>
      <h2 class="client__promo__title"><?php the_title(); ?></h2>						
      <div class="client__promo__excerpt"><?php the_excerpt(); ?></div>
      <a href="<?php the_permalink(); ?>" class="client__promo__link">Read the case study</a>
      <img class="client__promo-logo" src="<?php echo get_post_meta($post->ID, 'client-logo', true);?>" alt="<?php echo get_post_meta($post->ID, 'client ', true);?> logo">
    </div>
    <div class="client__promo promo__image" style="background-image:url(<?php echo get_post_meta($post->ID, 'promo-image', true);?>);">&nbsp;</div>
  </div>
  <?php endwhile; ?>

<?php /* 2nd and 3rd journal posts start from 1 get 2*/ 
  $posts = get_journal_post_range(1, 2);
  while ( $posts->have_posts() ) : 
    $posts->the_post();  ?>
  POST
<?php endwhile; ?>


<?php /* The most recent journal post */ ?>

<?php get_template_part('partials/html','bottom'); ?>