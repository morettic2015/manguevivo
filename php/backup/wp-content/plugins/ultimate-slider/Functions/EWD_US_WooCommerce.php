<?php
$WC_Product_Image_Slider = get_option("EWD_US_WC_Product_Image_Slider");
if ($WC_Product_Image_Slider == "Yes") {add_filter('woocommerce_single_product_image_thumbnail_html', "EWD_US_Remove_WC_Thumbnails", 10);}
if ($WC_Product_Image_Slider == "Yes") {add_filter('woocommerce_single_product_image_html', "EWD_US_Replace_WooCommerce_Image", 10, 2);}
function EWD_US_Replace_WooCommerce_Image($HTML, $Product_ID) {
	$product = wc_get_product($Product_ID);

	$post_ids = get_post_thumbnail_id($Product_ID);
	$attachment_ids = $product->get_gallery_attachment_ids();

	if ($attachment_ids) {
		foreach ($attachment_ids as $attachment_id) {
			$post_ids .= "," . $attachment_id;
		}
	}
	else {
		return $HTML;
	}

	return do_shortcode("[ultimate-slider post__in_string='" . $post_ids . "']");
}

function EWD_US_Remove_WC_Thumbnails() {
	return null;
}

?>