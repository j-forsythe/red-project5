<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'thumbnail' ); ?>
		<?php endif; ?>
    <div class="cat-content">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php the_excerpt(); ?>
    <span><?php echo CFS()->get('price'); ?></span>
	</div><!-- .cat-content -->
