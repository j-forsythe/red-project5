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
