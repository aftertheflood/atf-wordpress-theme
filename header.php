<?php wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>
<a class="skip-link screen-reader-text" href="#content">Skip to the content</a>
<header class="site-header" role="banner">
  <nav role="navigation">
    <div class="homelink">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
    </div>
    <div class="primarylinks">
      <a href="<?php echo esc_url( home_url( '/clients' ) ); ?>">Clients</a>
      <a href="<?php echo esc_url( home_url( '/journal' ) ); ?>">Journal</a>
      <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a>
    </div>
  </nav>

  <!-- FRONT PAGE HEADER -->
  <?php if ( is_front_page() ) {	?>
    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
    <?php if ( get_bloginfo( 'description' ) ) : ?>
      <p class="site-description"><?php bloginfo( 'description' ); ?></p>
    <?php endif; ?>	
  <?php } ?>

  <!-- ARCHIVE HEADER -->
  <?php if ( is_archive() ) {	?>
    <h1 class="site-title"><?php bloginfo( 'name' ); ?> archive</h1>
    <?php if ( get_bloginfo( 'description' ) ) : ?>
      <p class="site-description"><?php bloginfo( 'description' ); ?></p>
    <?php endif; ?>	
  <?php } ?>

</header>