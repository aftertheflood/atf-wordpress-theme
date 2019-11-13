</main>
<nav class="compact-menu <?php echo $pageTag ?>" id="compact-site-menu" style="display:none;">
	<div class="compact-menu__head">
		<h2 class="compact-menu__title">After the flood</h2>
		<a href="#page-top" class="close-menu-button">
		<svg width="36" height="36" viewBox="0 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;">
			<circle cx="18" cy="18" r="18" style="fill:#fff;"/>
			<path d="M7.393,7.393l21.214,21.214m-21.214,0l21.214,-21.214" style="fill:none;fill-rule:nonzero;stroke:#000;stroke-width:1px;"/>
		</svg>


<!--
		<svg class="compact-menu__close-icon" width="36" height="36" viewBox="0 0 36 36" fill="none" >
		<circle cx="22" cy="22" r="18" fill="white"/>
		<path shape-rendering="crispEdges" d="M11.3934 11.3934L32.6066 32.6066M11.3934 32.6066L32.6066 11.3934" stroke="black"/>
		</svg>
		-->
		</a>
	</div>
	<a class="compact-menu__link" href="/">Home</a>
	<a class="compact-menu__link" href="/clients">Projects</a>
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