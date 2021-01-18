<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NewsCredTest
 */

?>
<footer>
	<div class="footer__top container">
		<h4 class="font-weight-bold">Subscribe to our newsletter for <br>the latest update</h4>
		<div class="custom_input">
		<input placeholder="Enter Your Email" type="email" name="email" id="email">
		<span><img width="15" src="<?php echo get_template_directory_uri(); ?>/images/svg/envelop-black.svg" alt=""></span>
		</div>
	</div>
	<div class="footer__bottom">
		<div class="container">
		<p class="mb-0">Copyright © Text goes here</p>
		<p class="mb-0"><span class="mr-3">Follow us</span><img width="45" src="<?php echo get_template_directory_uri(); ?>/images/svg/social-pack.svg" alt=""></p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
