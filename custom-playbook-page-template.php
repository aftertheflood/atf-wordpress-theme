<?php /* Template Name: Playbook Page Template */ 
global $pageTag;
$pageTag = 'playbook';
$paged = get_query_var( 'paged' ); // what page of the archive etc are we on
?>
<?php get_template_part('partials/html','top'); ?>
<?php /* the top journal entry only on the first page */ 
if($paged == 0){
?>

<?php 
/* exclude category '8' which is clients */
$posts = get_excluding_category_post_range(array('8'), 0, 1);
while ( $posts->have_posts() ) : $posts->the_post(); ?>
  <?php if(get_post_meta($post->ID, 'promo-image', true)) { ?>  
    <div class="atf-grid journal-splash">
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
    </div>
  <?php } else { ?>
    <div class="atf-grid journal-splash__textonly">
      <div class="journal-splash__text">
        <div class="journal-splash__kicker">The latest</div>
        <h2 class="journal-splash__title"><?php the_title(); ?></h2>
        <div class="journal-splash__subtitle"><?php echo get_post_meta($post->ID, 'subtitle', true); ?></div>			
        <div class="journal-splash__date"><?php the_date() ?></div>
        <div class="journal-splash__excerpt"><?php the_excerpt(); ?></div>
        <a href="<?php the_permalink(); ?>" class="journal-splash__link">Read more</a>
      </div>
    </div>
  <?php } ?>
<?php endwhile; ?>


<?php } /* the remaining journal entries */ ?>
<div class="atf-grid journal-archive">
  <?php if($paged == 0){ ?>
  <div class="journal-archive__kicker">Recently</div>
  <?php } else { ?>
  <div class="journal-archive__kicker">Archive</div>
  <?php } ?>  
  <div class="atf-archive-grid">
    <?php 
    $start_entry = 1;
    if($paged > 1){
      $start_entry = (($paged-1)*10 + 1);
    }

    $posts = get_excluding_category_post_range(array('8'), $start_entry, 10);
    while ( $posts->have_posts() ) : $posts->the_post(); ?>
    <div class="journal-archive__entry">
      <a href="<?php the_permalink(); ?>">
        <h2 class="journal-archive__title"><?php the_title(); ?></h2>
        <?php if (get_post_meta($post->ID, 'subtitle', true)) : ?>
          <div class="journal-archive__subtitle"><?php echo get_post_meta($post->ID, 'subtitle', true); ?></div>
        <?php endif; ?>
      </a>
      <div class="journal-archive__date"><?php the_date() ?></div>
      <div class="journal-archive__excerpt"><?php the_excerpt(); ?></div>
      <a href="<?php the_permalink(); ?>" class="journal-archive__link">Continue reading</a>
    </div>
    <?php endwhile; ?>
  </div>
  <!-- the previous/next button -->
  <div class="archive-pagination">
    <?php if($paged > 0){ ?>
    <a href="<?php previous_posts(); ?>">Newer</a>
    <?php } ?>
    <a href="<?php next_posts(); ?>">Older</a>
    <?php ?>
  </div>
</div>


<?php get_template_part('partials/html','bottom'); ?>