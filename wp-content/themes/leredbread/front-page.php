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
						<div class="categories">
							<img src="<?php echo get_template_directory_uri() . '/assets/images\/'. $term->slug; ?>.png" alt="" />
							<h3><?php echo $term->name; ?></h3>
							<p>
								<?php echo $term->description; ?>
								<a href="<?php echo get_term_link( $term );?>">See More...</a>
							</p>
						</div><!--categories -->
					<?php endforeach; ?>
				<?php endif; ?>
				<div class="see-products">
					<p>
						All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.
					</p>
						<a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="see-product-button">
							See Our Products
						</a>
				</div><!--see-products -->
			</section><!--product-cat -->

			<section class="news-posts">
				<h2>Our Latest News</h2>
				<hr></hr>
				<div class="latest-news container">
					<?php
					$args = array( 'post_type' => 'post', 'posts_per_page' =>4 );
					$latest_posts = get_posts( $args );
					?>
					<?php foreach( $latest_posts as $post ): setup_postdata( $post ); ?>
						<div class="latest-posts">
							<?php if ( has_post_thumbnail()) : ?>
								<?php the_post_thumbnail( 'medium' ); ?>
							<?php endif; ?>
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<div class="entry-meta">
								<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
							</div><!-- .entry-meta -->
						</div><!-- .latest-posts -->
					<?php endforeach; wp_reset_postdata(); ?>
				</div><!--latest-news -->
			</section><!--news-posts -->

			<section class="testimonial container">
				<a href="<?php echo esc_url( home_url( '/testimonial' ) ); ?>" alt="testimonials" class="test-title">

				<h2>What Others Say About us</h2>
			</a>
				<hr></hr>
					<?php
						get_template_part( 'template-parts/home-testimonial' );
					?>
				</section><!--testimonial -->
			</article><!-- frontpage -->
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
