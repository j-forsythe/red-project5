<?php
/**
* Template Name: About Page
**/
get_header();?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <h2>Our Story</h2>
      <?php echo CFS()->get('our_story'); ?>

    </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
