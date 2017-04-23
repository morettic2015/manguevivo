<?php
class EWD_US_Display_Slider extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		parent::__construct(
			'ewd_us_display_slider', // Base ID
			__('Ultimate Slider', 'EWD_US'), // Name
			array( 'description' => __( 'Add a slider to any widgetized area.', 'EWD_US' ), ) // Args
		);
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		echo do_shortcode("[ultimate-slider posts='". $instance['post_count'] . "' slider_type='". $instance['slider_type'] . "' category='". $instance['category'] . "']");
		echo $args['after_widget'];
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		$post_count = ! empty( $instance['post_count'] ) ? $instance['post_count'] : __( 'Number of Slides', 'EWD_US' );
		$slider_type = ! empty( $instance['slider_type'] ) ? $instance['slider_type'] : __( 'Slider Type', 'EWD_US' );
		$category = ! empty( $instance['category'] ) ? $instance['category'] : __( 'Category', 'EWD_US' );
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'post_count' ); ?>"><?php _e( 'Number of Slides:', 'EWD_US' ); ?></label> 
		<select class="widefat" id="<?php echo $this->get_field_id( 'post_count' ); ?>" name="<?php echo $this->get_field_name( 'post_count' ); ?>" >
			<option value="-1" <?php if (esc_attr( $post_count ) == "-1") {echo "selected='selected'";} ?> >All</option>
			<?php for ($i=1; $i<=10; $i++) { ?>
				<option value='<?php echo $i;?>' <?php if (esc_attr( $post_count ) == $i) {echo "selected='selected'";} ?> ><?php echo $i; ?></option>
			<?php } ?>
		</select>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'slider_type' ); ?>"><?php _e( 'Slider Type:', 'EWD_US' ); ?></label> 
		<select class="widefat ewd-us-widget-slider-type" id="<?php echo $this->get_field_id( 'slider_type' ); ?>" name="<?php echo $this->get_field_name( 'slider_type' ); ?>" >
			<option value="" <?php if (esc_attr( $slider_type ) == "") {echo "selected='selected'";} ?> >Standard (Uses Slides You Create)</option>
			<option value="woocommerce" <?php if (esc_attr( $slider_type ) == "woocommerce") {echo "selected='selected'";} ?> >WooCommerce (Product Slides)</option>
		</select>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e( 'Category:', 'EWD_US' ); ?></label> 
		<select class="widefat ewd-us-widget-category" id="<?php echo $this->get_field_id( 'category' ); ?>" name="<?php echo $this->get_field_name( 'category' ); ?>" >
			<option value="" <?php if (esc_attr( $category ) == "") {echo "selected='selected'";} ?> >All</option>
		</select>
		</p>
		<?php 
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['post_count'] = ( ! empty( $new_instance['post_count'] ) ) ? strip_tags( $new_instance['post_count'] ) : '';
		$instance['slider_type'] = ( ! empty( $new_instance['slider_type'] ) ) ? strip_tags( $new_instance['slider_type'] ) : '';
		$instance['category'] = ( ! empty( $new_instance['category'] ) ) ? strip_tags( $new_instance['category'] ) : '';

		return $instance;
	}
}
add_action('widgets_init', create_function('', 'return register_widget("EWD_US_Display_Slider");'));

?>