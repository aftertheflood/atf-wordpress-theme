<?php /* Template Name: Home Page Template */ ?>
<?php 
global $pageTag;
$pageTag = 'home';?>
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
  $posts = get_category_post_range('journal',0,1);
  while ( $posts->have_posts() ) : $posts->the_post(); ?>
    <div class="splash__promo">
      <div class="splash__promo__date"><?php the_date() ?></div>
      <h2 class="splash__promo__title"><?php the_title(); ?></h2>
      <div class="splash__promo__subtitle"><?php echo get_post_meta($post->ID, 'subtitle', true); ?></div>
      <a href="<?php the_permalink(); ?>" class="splash__promo__link">Read the journal post</a>
    </div>
  <?php endwhile; ?>
</div>

<?php 
/* case studies */
  $post = get_post(2); 
  $content = apply_filters('the_content', $post->post_content); 
  echo $content;
?>

<h3>Recently in the Journal &hellip;</h3>
<div class="atf-grid">
<?php /* 2nd and 3rd journal posts start from 1 get 2*/ 
  $count = 0;
  $posts = get_category_post_range('journal',1, 2);
  while ( $posts->have_posts() ) : 
    $posts->the_post();  ?>
  <div class="archive-post-light <?php if($count % 2 == 0){
    echo 'split-50-50-left';
  }else{
    echo 'split-50-50-right';
  } 
  $count ++;?>">
    <div class="light-archive__date"><?php the_date() ?></div>
    <h2 class="light-archive__title"><?php the_title() ?></h2>
    <div class="light-archive__excerpt"><?php the_excerpt() ?></div>
    <a class="light-archive__link" href="<?php the_permalink() ?>">Read more</a>
  </div>
<?php endwhile; ?>
</div>
<div class="atf-grid"><a class="onward-journey-link" href="/journal">All Journal Posts</a></div>


<?php get_template_part('partials/html','bottom'); ?>