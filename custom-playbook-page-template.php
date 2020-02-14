<?php /* Template Name: Playbook Page Template */ 
  global $pageTag;
  $pageTag = 'playbook';
  $paged = get_query_var( 'paged' ); // what page of the archive etc are we on
?>
<?php get_template_part('partials/html','top'); ?>


<!-- the top journal entry only on the first page -->
<?php if($paged == 0){ ?>

  <div class="atf-grid playbook-standfirst">
    <?php 
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
          the_content();
        endwhile;
      endif; 
    ?>
  </div>
<?php } ?>


<?php 
?>  


<!-- the entries --> 
<div class="atf-grid playbook-entries"> 
  <?php 
    $start_entry = 0;
    if($paged > 1){
      $start_entry = (($paged-1)*10 + 1);
    }
    $posts = get_excluding_category_post_range(array('2', '3', '5'), $start_entry, 10);
    while ( $posts->have_posts() ) : $posts->the_post(); 
  
  ?>

    <div class="playbook-entry  <?php echo get_child_category_playbook($post->ID, "Playbook"); ?>">
      <a href="<?php the_permalink(); ?>">
        <h2 class="playbook__title"><?php the_title(); ?></h2>
        <?php if (get_post_meta($post->ID, 'subtitle', true)) : ?>
          <div class="playbook__subtitle"><?php echo get_post_meta($post->ID, 'subtitle', true); ?></div>
        <?php endif; ?>
      </a>
      <div class="playbook__date"><?php the_date() ?></div>
      <div class="playbook__excerpt"><?php the_excerpt(); ?></div>
      <a href="<?php the_permalink(); ?>" class="playbook__link">Read more</a>
    </div>

  <?php endwhile; ?>




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