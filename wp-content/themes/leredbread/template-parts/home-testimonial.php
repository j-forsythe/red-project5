<?php
/**
 * Template part for Testimonials 
 *
 * @package RED_Starter_Theme
 */

?>

<section class="testimonial container">
  <h2>What Others Say About us</h2>
  <hr></hr>
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
        </div><!--review -->
      <?php endforeach; wp_reset_postdata(); ?>
    </div><!--testimonial-grid -->
  </section><!--testimonial -->
