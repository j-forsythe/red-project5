<?php
/**
 * Template Name: The Product-Type Taxonomy
 */
 get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main product-type-page" role="main">

  <?php if ( have_posts() ) : ?>

    <header class="page-header product-category">
      <?php
        the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="taxonomy-description">', '</div>' );
      ?>
    </header><!-- .page-header -->
    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
			<div class="cat-type">
      <?php
        get_template_part( 'template-parts/archive-type' );
      ?>
			</div>
    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

  <?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

  <?php endif; ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
