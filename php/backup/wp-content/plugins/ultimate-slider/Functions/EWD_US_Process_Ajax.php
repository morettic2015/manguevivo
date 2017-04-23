<?php

function EWD_US_Get_Post_IDs($Raw = 'No') {
    $args = array(
	    'post_type'    => array( 'page', 'post' ),
	    'orderby'      => 'menu_order'
	);
	$Post_Links_Query = new WP_Query ( $args );
	$Post_Links = $Post_Links_Query->posts;

	if ($Raw == "Yes") {return $Post_Links;}

	foreach ($Post_Links as $Post_Object) {
		$Post['ID'] = $Post_Object->ID;
		$Post['Name'] = $Post_Object->post_title;

		$Posts[] = $Post;
	}

	echo json_encode($Posts);
}
add_action('wp_ajax_ewd_us_get_post_ids', 'EWD_US_Get_Post_IDs');

function EWD_US_Update_Slides_Order() {
	$IDs = json_decode(stripslashes($_POST['IDs']));
	if (!is_array($IDs)) {$IDs = array();}

	foreach ($IDs as $Order => $Post_ID) {
		update_post_meta($Post_ID, 'EWD_US_Slide_Order', $Order);
	}

}
add_action('wp_ajax_ewd_us_slides_update_order', 'EWD_US_Update_Slides_Order');