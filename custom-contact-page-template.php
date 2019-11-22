<?php /* Template Name: Contact Page Template */ 
global $pageTag;
$pageTag = 'contact';
?>
<?php get_template_part('partials/html','top'); ?>
<div class="contact__content">

  <div class="contact__info atf-grid">

    <div class="info__details">
      <p>140–142 St John Street, <span class="only-on-mobile"><br /></span>London, EC1V 4UB, UK</p>
      <p class="phone-number"><a href="tel:+442356789012">+44 (0)23 5678 9012</a></p>
      <p><a href="mailto:info@aftertheflood.com">info@aftertheflood.com</a></p>
      <div class="social">
        <a href="https://twitter.com/afterthefloodco?lang=en"><img src="/wp-content/themes/atf-wordpress-theme/assets/images/twitter-social-circle-black.svg" class="social-icon"></a>
        <a href="https://www.instagram.com/afterthefloodco/"><img src="/wp-content/themes/atf-wordpress-theme/assets/images/instagram-social-circle-black.svg" class="social-icon"></a>
        <a href="https://medium.com/@AftertheFloodco"><img src="/wp-content/themes/atf-wordpress-theme/assets/images/medium-social-circle-black.svg" class="social-icon"></a>
        <a href="https://www.linkedin.com/company/after-the-flood"><img src="/wp-content/themes/atf-wordpress-theme/assets/images/linkedin-social-circle-black.svg" class="social-icon"></a>
      </div>

    </div>

  </div>

  <!-- <div class="contact__map"></div> -->

  <div class="contact__form">
    <p class="form__title">Get in touch</p>
    <div class="form__body">
      <?php if ( have_posts() ) :?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

</div>

<?php get_template_part('partials/html','bottom'); ?>