<header class="site-header" role="banner">
<a class="skip-link screen-reader-text" href="#content">Skip to the content</a>
<?php 
  global $pageTag;
  $pageTag;
  
  global $post;
  $post_slug = $post->post_name;
  
  if(is_single()){
    if ( in_category( 'client' ) ){
      $pageTag = 'clients';
    }else{
      $pageTag = 'journal';
    }
  }
  
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
  <nav role="navigation" class="full-nav <?php echo $pageTag ?>">
    <div class="header-links home-link <?php if(!is_front_page()){ echo 'persist'; } ?>">
      <div class="header-link">
        <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        <?php if(is_front_page()){ addActiveMarker(); } ?>
      </div>
    </div>
    <div class="header-links">
      <div class="header-link">
        <a href="<?php echo esc_url( home_url( '/clients' ) ); ?>">Clients</a>
        <?php if(linkIsActive('clients', $post_slug) || linkIsActive('clients', $pageTag)){ addActiveMarker(); } ?>
      </div>
      <div class="header-link">
        <a href="<?php echo esc_url( home_url( '/journal' ) ); ?>">Blog</a>
        <?php if(linkIsActive('journal', $post_slug) || linkIsActive('journal', $pageTag)){ addActiveMarker(); }?>
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

  <!-- on smaller screens, the open/close button floats, so it is a separate element -->
  <div class="header-button">
    <a class="menu-link open-menu-button" href="#compact-site-menu">
    <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
      <circle cx="18" cy="18" r="18" fill="black"/>
      <path shape-rendering="crispEdges" d="M18 3V33M3 18H33" stroke="white"/>
    </svg>
    </a>
  </div>

  <nav role="navigation" class="compact-nav <?php echo $pageTag ?>">
    <div class="header-links home-link <?php if(!is_front_page()){ echo 'persist'; } ?>">
      <div class="header-link">
        <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
      </div>
    </div>
  </nav>
  <div class="nav-place-holder"></div>
  <!-- ARCHIVE HEADER -->
  <?php if ( is_archive() ) {	?> <?php } ?>

</header>