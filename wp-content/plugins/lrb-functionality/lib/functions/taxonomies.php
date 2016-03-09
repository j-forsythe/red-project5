<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

// Register Custom Taxonomy
function register_product_type_taxonomy() {

	$labels = array(
		'name'                       => 'Product Types',
		'singular_name'              => 'Product Type',
		'menu_name'                  => 'Product Type',
		'all_items'                  => 'All Product Types',
		'parent_item'                => 'Parent Product Type',
		'parent_item_colon'          => 'Parent Product Type:',
		'new_item_name'              => 'New Product TypeName',
		'add_new_item'               => 'Add New Product Type',
		'edit_item'                  => 'Edit Product Type',
		'update_item'                => 'Update Product Type',
		'view_item'                  => 'View Product Type',
		'separate_items_with_commas' => 'Separate product types with commas',
		'add_or_remove_items'        => 'Add or remove product types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Product Types',
		'search_items'               => 'Search Product Type',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No product types',
		'items_list'                 => 'Product Types list',
		'items_list_navigation'      => 'Product Types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product_type', array( 'product' ), $args );

}
add_action( 'init', 'register_product_type_taxonomy', 0 );

// Register Custom Taxonomy
function testimonial_taxonomy() {

	$labels = array(
		'name'                       => 'Testimonials',
		'singular_name'              => 'Testimonial',
		'menu_name'                  => 'Testimonial Tax',
		'all_items'                  => 'All Testimonial Taxs',
		'parent_item'                => 'Parent Testimonial Tax',
		'parent_item_colon'          => 'Parent Testimonial Tax:',
		'new_item_name'              => 'New Testimonial Tax Name',
		'add_new_item'               => 'Add Testimonial Tax',
		'edit_item'                  => 'Edit Testimonial Tax',
		'update_item'                => 'Update Testimonial Tax',
		'view_item'                  => 'View Testimonial Tax',
		'separate_items_with_commas' => 'Separate Testimonials Tax with commas',
		'add_or_remove_items'        => 'Add or remove Testimonial Taxs',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Testimonial Taxs',
		'search_items'               => 'Search Testimonial Taxs',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Testimonial Taxs',
		'items_list'                 => 'Testimonial Taxs list',
		'items_list_navigation'      => 'Testimonial Taxs list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'testimonial_tax', array( 'testimonial' ), $args );

}
add_action( 'init', 'testimonial_taxonomy', 0 );
