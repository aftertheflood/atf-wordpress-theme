<?php /* Template Name: Home Page Template */ ?>
<?php wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>
	<body>
		<?php wp_body_open(); ?>
    <?php get_header(); ?>
		<main class="content" id="content" role="main">
      <?php 
        $count = 0;
        if ( have_posts() ){
          while ( have_posts() ){
            the_post();
            $count++;
						if ($count <= 1) { ?>
              <div class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>						
                <?php the_excerpt(); ?>
              </div>
      <?php }
          }
        } 
      ?>      
		</main>
		<?php get_template_part('footer','promo'); ?>
		<?php get_footer(); ?>
		<?php wp_footer(); ?> 
	</body>
</html>