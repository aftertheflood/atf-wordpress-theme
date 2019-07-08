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
			<?php if ( have_posts() ) :?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="post">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>						
					<?php
						if ( is_singular() ){
							the_content();	
						}else{
							the_excerpt();	
						}
					?>
					</div>
				<?php endwhile; ?>
      <?php else : ?>
				<div class="post">
						<p><?php _e( 'Sorry, the page you requested cannot be found.'); ?></p>
				</div>
			<?php endif; ?>      
			<?php if ( ! is_singular() && ( get_previous_posts_link() || get_next_posts_link() ) ) : ?>
				<div class="pagination">			        
					<?php previous_posts_link( '&larr; ' . __( 'Newer posts', 'davis' ) ); ?>
					<?php next_posts_link( __( 'Older posts', 'davis') . ' &rarr;' ); ?>
				</div>
			<?php endif; ?>	        
		</main>
		<?php get_template_part('footer','promo'); ?>
		<?php get_footer(); ?>
		<?php wp_footer(); ?> 
	</body>
</html>