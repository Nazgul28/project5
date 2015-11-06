<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footerbox">
					<div class="info">
						<h2> contact </h2>
						<p><span><i class="fa fa-envelope"></i></span><a href="mailto:info@leredbread.com">info@leredbread.com</a></p>
						<p><span><i class="fa fa-phone"></i></span><a href="tel:555-343-456-7891">(555) 343 456 7891</a></p>
						<i class="fa fa-facebook-square"></i>
						<i class="fa fa-twitter-square"></i>
						<i class="fa fa-google-plus-square"></i>
					</div>
					<div class="logofooter">
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/lrb-logo-white.svg"/>
					</div>
					<div class="hours">
						<h2> business hours </h2>
						<p><span class="days"> Monday-Friday:</span> 9am to 5pm </p>
						<p><span class="days"> Saturday:</span> 10am to 2pm </p>
						<p><span class="days"> Sunday:</span> Closed </p>
					</div>
				</div>
				<div class="site-info">
					
				<span class="copyright"><p>Copyright &copy; 2015 Le Red Bread </p></span>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
