<?php
/**
* Template Name: About Page
**/
get_header();?>

<div class="content-area about-page container">
	<div class="title">
		<h2>Learn About Our Team and Culture</h2>
		<span><?php echo CFS()->get('tagline'); ?></span>
		<hr>
	</div><!-- about-title-->
	<section class="about-col">
	<div class="about-info">
		<div class="team">
			<img src="<?php echo get_template_directory_uri() .'./assets/images/team.jpg' ?>" alt="" />
			<h4>Le Red Bread Team</h4>
			<span>Baking up a storm everyday.</span>
			<?php echo CFS()->get('team_copy'); ?>
		</div><!--team-->
		<div class="culture">
			<img src="<?php echo get_template_directory_uri() .'./assets/images/bakery.jpg' ?>" alt="" />
			<h4>Le Red Bread Bakery</h4>
			<span>A home away from home.</span>
			<?php echo CFS()->get('bakery_copy'); ?>
		</div><!--culture-->
	</div><!--about-info-->
</section>

	<div class="story">
		<h3>Our Story</h3>
		<?php echo CFS()->get('our_story'); ?>
	</div><!--story-->
	<div class="see-products">
		<p>
Feel free to contact us with any questions coments or suggestions. We even take custom orders!
		</p>
		<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="see-product-button">
			Contact Us
		</a>
	</div><!--see-products -->
</div><!-- #primary -->

<?php get_footer(); ?>
