<?php 
    global $pageTag;
	$pageTag = 'journal'; /* by default, most of the time it's going to be a journal page */
	wp_enqueue_style( 'style', get_stylesheet_uri() );
?>
<?php get_template_part('partials/html','top'); ?>
<div class="atf-grid journal-archive">
  <div class="journal-archive__kicker">Archive</div>
  <div class="atf-archive-grid">
        <?php 
        global $wp_query;
        $maxPages = $wp_query->max_num_pages;
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?> 

<div class="journal-archive__entry">
    <h2 class="journal-archive__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="journal-archive__subtitle"><?php echo get_post_meta($post->ID, 'subtitle', true); ?></div>
    <div class="journal-archive__date"><?php the_date() ?></div>
    <div class="journal-archive__excerpt"><?php the_excerpt(); ?></div>
    <a href="<?php the_permalink(); ?>" class="journal-archive__link">Continue reading</a>
</div>

        <?php
            } // end while
        } // end if
        ?>
    </div>
</div>
<div class="archive-pagination">
  <?php if($paged > 0){ ?>
  <a href="<?php previous_posts(); ?>">previous</a>
  <?php } 
  if($maxPages > $paged + 1){?>
  <a href="<?php next_posts(); ?>">next</a>
  <?php } ?>
</div>
<?php get_template_part('partials/html','bottom'); ?>
