<?php
/**
* The template for displaying archive pages.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div class="products-page container">

		<?php if ( have_posts() ) : ?>

			<header class="page-header title">
				<?php
				the_archive_title( '<h2 class="page-title">', '</h2>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<span>We are a team of creative and talented individuals who love making delicious treats.</span>
				<hr></hr>
			</header><!-- .page-header -->

			<section class="product-type">
				<?php
				$terms = get_terms('product_type'); ?>
				<?php if ( !empty($terms)) : ?>
					<?php foreach ($terms as $term) : ?>
						<div class="categories">
							<a href="<?php echo get_term_link( $term );?>">
								<img src="<?php echo get_template_directory_uri() . '/assets/images\/'. $term->slug; ?>.png" alt="" />
								<h3><?php echo $term->name; ?></h3>
							</a>
						</div><!--categories -->
					<?php endforeach; ?>
				<?php endif; ?>
			</section><!--product-type -->

			<section class="product-grid">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="archive-product">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink() ?>" alt=""/>
								<?php the_post_thumbnail( 'small' ); ?>
							</a>
						<?php endif; ?>
						<div class="product-info">
							<?php the_title( '<span class="product-title">', '</span>' ); ?>
							<span class="price"><?php echo CFS()->get( 'price' ); ?></span>
						</div><!--product-info-->
					</div><!-- archive-product -->
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</section><!-- product-grid -->

	</div><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
