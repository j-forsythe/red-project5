<?php
/**
 * RED WordPress Widget Boilerplate
 *
 * The RED Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   LRB Contact Info
 * @author    Jill Forsythe <j.forsthe8@gmail.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2015 RED Academy
 *
 * @wordpress-plugin
 * Plugin Name:       LRB Contact Info
 * Plugin URI:        @TODO
 * Description:       Contact info for Le Red Bread Bakery
 * Version:           1.0.0
 * Author:            Jill Forsythe
 * Author URI:        @TODO
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

// TODO: change 'LRB Contact Info' to the name of your plugin
class LRB_Contact_Info extends WP_Widget {

    /**
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'lrb_contact_info';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		// TODO: update description
		parent::__construct(
			$this->get_widget_slug(),
			'LRB Contact Info',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Contact info for Le Red Bread Bakery.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
		$phone_number = empty( $instance['phone_number'] ) ? '' : apply_filters( 'widget_phone_number', $instance['phone_number'] );
		$email = empty( $instance['email'] ) ? '' : apply_filters( 'widget_email', $instance['email'] );
		$address = empty( $instance['address'] ) ? '' : apply_filters( 'widget_address', $instance['address'] );

		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['phone_number'] = strip_tags( $new_instance['phone_number'] );
		$instance['email'] = strip_tags( $new_instance['email'] );
		$instance['address'] = strip_tags( $new_instance['address'] );

		// TODO: Here is where you update the rest of your widget's old values with the new, incoming values

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		// TODO: Define default values for your variables, create empty value if no default
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'Contact Info',
				'phone_number' => '',
				'email' => '',
				'address' => '',
			)
		);

		$title = strip_tags( $instance['title'] );
		$phone_number = strip_tags( $instance['phone_number'] );
		$email = strip_tags( $instance['email'] );
		$address = strip_tags( $instance['address'] );

		// TODO: Store the rest of values of the widget in their own variables

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

// TODO: Remember to change 'LRB Contact Info' to match the class name definition
add_action( 'widgets_init', function(){
     register_widget( 'LRB_Contact_Info' );
});
