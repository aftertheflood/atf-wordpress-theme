<?php /* Template Name: Home Page Template */ ?>
<?php 
global $pageTag;
$pageTag = 'home';
?>
<?php get_template_part('partials/html','top'); ?>

<?php /* The title and strapline */ ?>

<?php /* The most recent journal post */ ?>
<?php 
  $posts = get_top_post();
  while ( $posts->have_posts() ) : $posts->the_post(); ?>
    <div class="post">
      <h2><a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a></h2>						
      <?php the_excerpt(); ?>
    </div>
<?php endwhile; ?>

<?php /* case studies */ ?>

<?php /* 2nd and 3rd journal posts */ ?>

<?php /* The most recent journal post */ ?>

<?php get_template_part('partials/html','bottom'); ?>