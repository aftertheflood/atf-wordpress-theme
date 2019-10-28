<?php 
	global $pageTag;
	$pageTag = 'journal'; /* by default, most of the time it's going to be a journal page */
	wp_enqueue_style( 'style', get_stylesheet_uri() );
?>

<?php get_template_part('partials/html','top'); ?>
	<?php if ( have_posts() ) :?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( is_singular() ){ ?>
				<div class="article-head atf-grid">
					<div class="article-title">
						<h1><?php the_title(); ?></h1>
						<?php 
							$subtitle = get_post_meta($post->ID, 'subtitle', true);
							if ($subtitle) {
								echo '<div class="journal-splash__subtitle">'.$subtitle.'</div>';
							}
						?>			
					</div>
				</div>
				<div class="article-body">
					<div class="article__date atf-grid">
						<div class="the-metadata">
							<?php
							if ($pageTag != "clients") { ?>
								<div class="the-date"><?php the_time( 'j M Y' ); ?></div>
							<?php } else { ?>
								<div class="the-client">Client</div>
								<div class="the-sector">Sector</div>
							<?php } ?>
							<div class="the-tags">
								<ul>
									<li class="tag">tag 1</li>
									<li>tag 2</li>
									<li>tag 3</li>
									<li>tag 1</li>
									<li>tag 2</li>
									<li>tag 3</li>
									<li>tag 1</li>
									<li>tag 2</li>
									<li>tag 3</li>
									<li>tag 1</li>
									<li>tag 2</li>
									<li>tag 3</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="article__content atf-grid">
						<?php the_content(); ?>
					</div>
				</div>
				<?php }else{ ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
				<?php } ?>
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