<?php /* Template Name: Journal Page Template */ 
global $pageTag;
$pageTag = 'journal';
$paged = get_query_var( 'paged' ); // what page of the archive etc are we on
?>
<?php get_template_part('partials/html','top'); ?>
<?php /* the top journal entry only on the first page */ 
if($paged == 0){
?>

<div class="atf-grid journal-splash">
  <?php 
  $posts = get_category_post_range('journal',0,1);
  while ( $posts->have_posts() ) : $posts->the_post(); ?>
    <div class="journal-splash__text">
      <div class="journal-splash__kicker">The latest</div>
      <h2 class="journal-splash__title"><?php the_title(); ?></h2>
      <div class="journal-splash__subtitle"><?php echo get_post_meta($post->ID, 'subtitle', true); ?></div>			
      <div class="journal-splash__date"><?php the_date() ?></div>
      <div class="journal-splash__excerpt"><?php the_excerpt(); ?></div>
      <a href="<?php the_permalink(); ?>" class="journal-splash__link">Read more</a>
    </div>
    <div class="journal-splash__image" style="background-image: url(<?php echo get_post_meta($post->ID, 'promo-image', true);?>)">
      <img src="<?php echo get_post_meta($post->ID, 'promo-image', true);?>">
    </div>
  <?php endwhile; ?>
</div>
<?php } /* the remaining journal entries */ ?>
<div class="atf-grid journal-archive">
  <?php if($paged == 0){ ?>
  <div class="journal-archive__kicker">Recently</div>
  <?php } else { ?>
  <div class="journal-archive__kicker">Archive</div>
  <?php } ?>  
  <div class="atf-archive-grid">
  <?php 
  $posts = get_category_post_range('journal', ($paged*10 + 1), 10);
  while ( $posts->have_posts() ) : $posts->the_post(); ?>
  <div class="journal-archive__entry">
    <h2 class="journal-archive__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="journal-archive__subtitle"><?php echo get_post_meta($post->ID, 'subtitle', true); ?></div>
    <div class="journal-archive__date"><?php the_date() ?></div>
    <div class="journal-archive__excerpt"><?php the_excerpt(); ?></div>
    <a href="<?php the_permalink(); ?>" class="journal-archive__link">Continue reading</a>
  </div>
  <?php endwhile; ?>
  </div>
</div>
<div class="archive-pagination">
  <?php if($paged > 0){ ?>
  <a href="<?php previous_posts(); ?>">previous</a>
  <?php } ?>
  <a href="<?php next_posts(); ?>">next</a>
  <?php ?>
</div>

<?php get_template_part('partials/html','bottom'); ?>