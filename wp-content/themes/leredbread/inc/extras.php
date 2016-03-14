<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/**
* Remove submenues
**/
function lrb_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_init', 'leredbread_remove_submenus', 102 );

/**
* Custom Login Header
**/
function lrb_login_logo() {
     echo '<style type="text/css">
         h1 a {
					 background-image:url('.get_template_directory_uri().'./assets/images/lrb-logo.svg) !important;
	         background-size: contain !important;
					 width: 100% !important;
					 margin-left: -40px;}
     </style>';
}
add_action('login_head', 'lrb_login_logo');

function lrb_login_url() {
		return home_url();
}
add_filter('login_headerurl', 'lrb_login_url');

/**
*filter archive post lrb_modify_archive_loop
**/
function lrb_modify_archive_loop( $query ) {
	if (is_post_type_archive( array('product')) && !is_admin() && $query->is_main_query() ) {
		$query->set( 'orderby', 'title');
		$query->set( 'order', 'ASC' );
		$query->set( 'posts_per_page', 12 );
	}
	elseif (is_post_type_archive( array('testimonial')) && !is_admin()) {
		$query->set( 'orderby', 'title');
		$query->set( 'order', 'ASC' );
		// $query->set( 'posts_per_page', 12 );
	}
}
add_action('pre_get_posts', 'lrb_modify_archive_loop');

/**
*change archive titles based on post
*/
function lrb_archive_title($title) {
	if (is_post_type_archive( array('product'))) {
		$title = 'Our Products are Made Fresh Daily';
	}
	elseif ( is_tax('product_type')) {
    $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
		$title = $term->name;
	}
	elseif ( is_post_type_archive(array('testimonial'))) {
		$title= 'Testimonials';
	}
	return $title;
}
add_filter('get_the_archive_title', 'lrb_archive_title');

/**
* Makes blogs pretty
**/
function lrb_wp_trim_excerpt( $text ) {
    $raw_excerpt = $text;

    if ( '' == $text ) {
        // retrieve the post content
        $text = get_the_content('');

        // delete all shortcode tags from the content
        $text = strip_shortcodes( $text );

        $text = apply_filters( 'the_content', $text );
        $text = str_replace( ']]>', ']]&gt;', $text );

        // indicate allowable tags
        $allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
        $text = strip_tags( $text, $allowed_tags );

        // change to desired word count
        $excerpt_word_count = 50;
        $excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );

        // create a custom "more" link
        $excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more">Read more &rarr;</a></p>'; // modify excerpt ending
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );

        // add the elipsis and link to the end if the word count is longer than the excerpt
        $words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );

        if ( count( $words ) > $excerpt_length ) {
            array_pop( $words );
            $text = implode( ' ', $words );
            $text = $text . $excerpt_more;
        } else {
            $text = implode( ' ', $words );
        }
    }
    return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}

remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'lrb_wp_trim_excerpt' );
