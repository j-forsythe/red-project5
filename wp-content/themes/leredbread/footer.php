<?php
/**
* The template for displaying the footer.
*
* @package RED_Starter_Theme
*/

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info  container">
		<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
		<div class="contact-info">
			<div class="contact-info-wrapper">
				<?php dynamic_sidebar('sidebar-2'); ?>
			</div>
			<p class="footer-social">
				<i class="fa fa-facebook-square"></i>
				<i class="fa fa-twitter-square"></i>
				<i class="fa fa-google-plus-square"></i>
			</p>
		</div><!-- .contact-info -->

		<div class="footer-logo">
			<img src="<?php echo get_template_directory_uri() .'./assets/images/lrb-logo-white.svg' ?> " alt="Le Red Bread" />
		</div><!-- .footer-logo -->

		<div class="business-hours">
			<?php dynamic_sidebar('sidebar-3'); ?>
		</div><!-- .business-hours -->
	</div><!-- .site-info -->

	<div class="copy">
		<p>
			Copyright &copy; 2015 Le Red Bread
		</p>
	</div><!-- .copy -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
