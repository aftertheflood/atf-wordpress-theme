<?php /* Template Name: Home Page Template */ ?>
<?php 
global $pageTag;
$pageTag = 'home';
$this_page_id = get_the_ID();
?>
<?php get_template_part('partials/html','top'); ?>
<div class="splash atf-grid">
  <div class="splash__intro">
<?php 
  /* The title and strap-line */
  if ( is_front_page() ) {	?>
  <h1 class="splash__intro__title"><?php bloginfo( 'name' ); ?></h1>
  <?php if ( get_bloginfo( 'description' ) ) : ?>
    <p class="splash__intro__description"><a href="/about"><?php bloginfo( 'description' ); ?></a></p>
  <?php endif; ?>	
  <?php } ?>
  </div>
  <?php 
  /* The most recent journal post */
  $posts = get_category_post_range('pinned',0,1);
  while ( $posts->have_posts() ) : $posts->the_post(); ?>
    <div class="splash__promo">
      <div class="splash__promo-gridwrapper">
        <div class="splash__promo-gridwrapper-inner">
          <h2 class="splash__promo__title"><?php the_title(); ?></h2>
          <div class="splash__promo__subtitle"><?php echo get_post_meta($post->ID, 'subtitle', true); ?></div>
          <div class="splash__promo__date"><?php the_date() ?></div>
          <a href="<?php the_permalink(); ?>" class="splash__promo__link">Read the blog post</a>
        </div>
       </div>
    </div>
  <?php endwhile; ?>
</div>
<div class="homepage-promo-container">
<?php 
/* case studies */
  $post = get_post($this_page_id); 
  $content = apply_filters('the_content', $post->post_content);
  echo $content;
?>
  <div class="atf-grid more-clients">
    <a class="more-clients-link" href="/clients">See more projects &raquo;</a>    
  </div>
</div>

<div class="atf-grid journal-home">
  <h3 class="recently-header">Recently from the Blog &hellip;</h3>
  <div class="atf-archive-grid-home journal-home__posts">
    <?php /* 2nd and 3rd journal posts start from 1 get 2*/ 
      $count = 0;
      $posts = get_excluding_category_post_range(11, 0, 2);
      while ( $posts->have_posts() ) : 
        $posts->the_post(); ?>
      <div class="journal-archive__entry">
        <a href="<?php the_permalink() ?>">
          <h2 class="journal-archive__title"><?php the_title() ?></h2>
          <div class="journal-archive__subtitle"><?php echo get_post_meta($post->ID, 'subtitle', true); ?></div>
        </a>
        <div class="journal-archive__date"><?php the_date() ?></div>
        <div class="journal-archive__excerpt"><?php the_excerpt() ?></div>
        <a class="journal-archive__link" href="<?php the_permalink() ?>">Read more</a>
      </div>
    <?php endwhile; ?>
  </div>
  <a class="onward-journey-link" href="/journal">More blog posts</a>

</div>

<?php get_template_part('partials/html','bottom'); ?>