<?php
/**
* The template for displaying archive pages.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="testimonial-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<div class="archive-testimonial">
				<?php
				$args = array( 'post_type' => 'testimonial');
				$all_testimonial = get_posts( $args );
				?>
				<div class="testimonial-grid">
					<?php foreach( $all_testimonial as $post ): setup_postdata( $post ); ?>
						<div class="review">
							<img src="<?php echo CFS()->get('profile_picture'); ?>" alt="" />
							<ul class="review-info">
								<li class="review-name"><h3><?php echo CFS()->get('name') ?></h3></li>
								<li><?php echo CFS()->get('review') ?></li>
								<li class="job-title"><?php echo CFS()->get('job_title') ?> -
									<?php echo CFS()->get('company_link') ?></li>
								</ul>
							</div><!--review -->
						<?php endforeach; wp_reset_postdata(); ?>
					</div>
				<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
		<?php get_footer(); ?>
