<a class="skip-link screen-reader-text" href="#content">Skip to the content</a>
<header class="site-header" role="banner">
<?php 
    global $post;
    $post_slug = $post->post_name;

    function linkIsActive($str, $slug){
      if($str == $slug){
        return true;
      }
      return false;
    }

    function addActiveMarker(){
      echo '<div class="active-marker"><svg viewBox="0 0 50 50"><circle class="active-marker-circle" cx="25" cy="25" r="20"></circle></svg></div>';
    }
?>
  <nav role="navigation" class="<?php if(is_front_page()) {
    echo 'home';
  }else{
    echo $post_slug;
  }?>">
    <div class="header-links home-link">
      <div class="header-link">
        <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        <?php if(is_front_page()){ addActiveMarker(); } ?>
      </div>
    </div>
    <div class="header-links">
      <div class="header-link">
        <a href="<?php echo esc_url( home_url( '/clients' ) ); ?>">Clients</a>
        <?php if(linkIsActive('clients', $post_slug)){ addActiveMarker(); } ?>
      </div>
      <div class="header-link">
        <a href="<?php echo esc_url( home_url( '/journal' ) ); ?>">Journal</a>
        <?php if(linkIsActive('journal', $post_slug)){ addActiveMarker(); }?>
      </div>
      <div class="header-link">
        <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a>
        <?php if(linkIsActive('about', $post_slug)){ addActiveMarker(); }?>
      </div>
      <div class="header-link">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a>
        <?php if(linkIsActive('contact', $post_slug)){ addActiveMarker(); }?>
      </div>
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