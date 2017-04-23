<?php 
function EWD_US_Add_Admin_Columns($cols) {
	$cols['us_menu_order'] = "Order";
	return $cols;
}
add_action('manage_edit-ultimate_slider_columns', 'EWD_US_Add_Admin_Columns');

function EWD_US_Return_Admin_Columns($column){
	global $post;
	switch ($column) {
		case 'us_menu_order':
			echo get_post_meta($post->ID, "EWD_US_Slide_Order", true);
			break;
		default:
			break;
	}
}
add_action('manage_ultimate_slider_posts_custom_column','EWD_US_Return_Admin_Columns');

function EWD_US_Sort_By_Order($query) {
	if (is_admin() and isset($_GET['post_type']) and $_GET['post_type'] == 'ultimate_slider' and !isset($_GET['orderby'])) {
		$query->set( 'meta_key', 'EWD_US_Slide_Order' );
		$query->set( 'orderby', 'meta_value_num' );
		$query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'EWD_US_Sort_By_Order' );