<?php 
	global $pageTag;
	$pageTag = 'journal'; /* by default, most of the time it's going to be a journal page */
	wp_enqueue_style( 'style', get_stylesheet_uri() );
?>
<?php get_template_part('partials/html','top'); ?>
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
			<?php previous_posts_link( '&larr; ' . __( 'Newer posts') ); ?>
			<?php next_posts_link( __( 'Older posts') . ' &rarr;' ); ?>
		</div>
	<?php endif; ?>	        
<?php get_template_part('partials/html','bottom'); ?>