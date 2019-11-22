<?php global $pageTag; ?>
<footer class="atf-footer atf-grid">
<?php if($pageTag != 'contact' ) { ?>
	<h2>Would you like to know more?</h2>
	<div class="footer-contact-link">
		<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" > 
			Get in touch
		</a>
		<a class="button-right" href="http://eepurl.com/dhBMZD">Or subscribe to our newsletter</a>
	</div>
<?php } ?>
	<div class="social">
		<a href="https://twitter.com/afterthefloodco?lang=en"><img src="/wp-content/themes/atf-wordpress-theme/assets/images/twitter-social-circle-white.svg" class="social-icon"></a>
		<a href="https://www.instagram.com/afterthefloodco/"><img src="/wp-content/themes/atf-wordpress-theme/assets/images/instagram-social-circle-white.svg" class="social-icon"></a>
		<a href="https://medium.com/@AftertheFloodco"><img src="/wp-content/themes/atf-wordpress-theme/assets/images/medium-social-circle-white.svg" class="social-icon"></a>
		<a href="https://www.linkedin.com/company/after-the-flood"><img src="/wp-content/themes/atf-wordpress-theme/assets/images/linkedin-social-circle-white.svg" class="social-icon"></a>
	</div>
	<div class="address">
		<span class="address-highlight">After the flood</span><br>
		140–142 St John Street, London, EC1V 4UB, UK<br>
		+44 (0)23 5678 9012<br>
		info@aftertheflood.com<br>
		Registered in England and Wales as After the flood Limited. 7792366
	</div>
	<div class="footer-logo">
		<img src="/wp-content/themes/atf-wordpress-theme/assets/images/atf-logo-clipped-footer.png">
	</div>
</footer>