</main>
<nav class="compact-menu <?php echo $pageTag ?>" id="compact-site-menu">
	<div class="compact-menu__head">
		<h2 class="compact-menu__title">After the flood</h2>
		<a href="#page-top" class="close-menu-button">
		<svg class="compact-menu__close-icon" width="44" height="44" viewBox="0 0 44 44" fill="none" >
		<circle cx="22" cy="22" r="18" fill="white"/>
		<path shape-rendering="crispEdges" d="M11.3934 11.3934L32.6066 32.6066M11.3934 32.6066L32.6066 11.3934" stroke="black"/>
		</svg>
		</a>
	</div>
	<a class="compact-menu__link" href="/clients">Clients</a>
	<a class="compact-menu__link" href="/journal">Blog</a>
	<a class="compact-menu__link" href="/about">About</a>
	<a class="compact-menu__link" href="/contact">Contact</a>
	</ul>
</nav>
<?php get_template_part('partials/footer','promo'); ?>
		<?php get_footer(); ?>
		<?php wp_footer(); ?> 
		</div> <!-- end of .page-layout -->
	</body>
</html>