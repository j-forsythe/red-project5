<?php
/**
* Static frontpage.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php is_front_page(); ?>

		<article class="front-page">
			<div class="hero-banner">
				<h1>Baked to Perfection.</h1>
			</div><!-- hero banner -->

			<section class="product-cat container">

			<?php
			$terms = get_terms('product_type'); ?>

			<?php if ( !empty($terms)) : ?>
				<?php foreach ($terms as $term) : ?>
					<img src="<?php echo get_template_directory_uri() . '/assets/images\/'. $term->slug; ?>.png" alt="" />
					<h3><?php echo $term->name; ?></h3>
					<p>
						<?php echo $term->description; ?>
						<a href="<?php echo get_term_link( $term );?>">See More...</a>
					</p>
				<?php endforeach; ?>
			<?php endif; ?>
			</section>

			<section class="latest-news container">
				<h2>Our Latest News</h2>

				<?php
				$args = array( 'post_type' => 'post', 'posts_per_page' =>4 );
				$latest_posts = get_posts( $args );
				?>

				<?php foreach( $latest_posts as $post ): setup_postdata( $post ); ?>
					<?php if ( has_post_thumbnail()) : ?>
						<?php the_post_thumbnail( 'medium' ); ?>
					<?php endif; ?>

					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><h4>
						<div class="entry-meta">
							<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
						</div><!-- .entry-meta -->
					<?php endforeach; wp_reset_postdata(); ?>
				</section>

				<section class="testimonial container">
					<h2>What Others Say About us</h2>

					<?php
					$args = array( 'post_type' => 'testimonial');
					$all_testimonial = get_posts( $args );
					?>
					<div class="testimonial-grid">
						<?php foreach( $all_testimonial as $post ): setup_postdata( $post ); ?>
							<div class="review">

								<img src="<?php echo CFS()->get('profile_picture'); ?>" alt="" />

								<ul class="review-info">
									<li><?php echo CFS()->get('review') ?></li>
									<li><?php echo CFS()->get('name') ?></li>
									<li><?php echo CFS()->get('job_title') ?> -
										<?php echo CFS()->get('company_link') ?></li>
									</ul>
								</div>

							<?php endforeach; wp_reset_postdata(); ?>

						</div><!--testimonial-grid -->

					</section>
				</article><!-- frontpage -->

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_footer(); ?>
