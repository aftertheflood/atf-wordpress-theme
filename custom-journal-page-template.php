<?php /* Template Name: Journal Page Template */ 
global $pageTag;
$pageTag = 'journal';
?>
<?php get_template_part('partials/html','top'); ?>
<?php /* the top journal entry */ ?>
<div class="atf-grid journal-splash">
  <?php 
  $posts = get_category_post_range('journal',0,1);
  while ( $posts->have_posts() ) : $posts->the_post(); ?>
    <div class="journal-splash__text">
      <div class="journal-splash__kicker">The latest</div>
      <h2 class="journal-splash__title"><?php the_title(); ?></h2>						
      <div class="journal-splash__date"><?php the_date() ?></div>
      <div class="journal-splash__excerpt"><?php the_excerpt(); ?></div>
      <a href="<?php the_permalink(); ?>" class="journal-splash__link">Read the journal post</a>
    </div>
    <div class="journal-splash__image">
    </div>
  <?php endwhile; ?>
</div>
<?php /* the remaining journal entries */ ?>
<div class="atf-grid journal-archive">
  <div>Recently</div>
  <div class="archive-subgrid">
  <?php 
  $posts = get_category_post_range('journal', 1, 9);
  while ( $posts->have_posts() ) : $posts->the_post(); ?>
  <div>
    <div class="journal-archive__date"><?php the_date() ?></div>
    <h2 class="journal-archive__title"><?php the_title(); ?></h2>						
    <div class="journal-archive__excerpt"><?php the_excerpt(); ?></div>
    <a href="<?php the_permalink(); ?>" class="journal-archive__link">Continue reading</a>
  </div>
  <?php endwhile; ?>
  </div>
</div>
<?php get_template_part('partials/html','bottom'); ?>