<?php
/* The file contains all of the functions which make changes to the WordPress tables */


function EWD_US_UpdateOptions() {
global $US_Full_Version;
	
	if (isset($_POST['Options_Submit']) and (!isset($_POST['hide_on_mobile']) or !is_array($_POST['hide_on_mobile']))) {$_POST['hide_on_mobile'] = array();}

	if (isset($_POST['custom_css'])) {update_option('EWD_US_Custom_CSS', stripslashes_deep($_POST['custom_css']));}
	if (isset($_POST['slider-autoplay'])) {update_option('EWD_US_Autoplay_Slideshow', stripslashes_deep($_POST['slider-autoplay']));}
	if (isset($_POST['autoplay_delay'])) {update_option('EWD_US_Autoplay_Delay', stripslashes_deep($_POST['autoplay_delay']));}
	if (isset($_POST['autoplay_interval'])) {update_option('EWD_US_Autoplay_Interval', stripslashes_deep($_POST['autoplay_interval']));}
	if (isset($_POST['transition_time'])) {update_option('EWD_US_Transition_Time', stripslashes_deep($_POST['transition_time']));}
	if (isset($_POST['aspect_ratio'])) {update_option('EWD_US_Aspect_Ratio', $_POST['aspect_ratio']);}
	if (isset($_POST['slider_carousel'])) {update_option('EWD_US_Carousel', $_POST['slider_carousel']);}
	if (isset($_POST['carousel_columns'])) {update_option('EWD_US_Carousel_Columns', stripslashes_deep($_POST['carousel_columns']));}
	if (isset($_POST['carousel_link_to_full'])) {update_option('EWD_US_Carousel_Link_To_Full', stripslashes_deep($_POST['carousel_link_to_full']));}
	if (isset($_POST['carousel_advance'])) {update_option('EWD_US_Carousel_Advance', stripslashes_deep($_POST['carousel_advance']));}
	if (isset($_POST['show_tinymce'])) {update_option('EWD_US_Show_TinyMCE', stripslashes_deep($_POST['show_tinymce']));}
	if (isset($_POST['timer_bar'])) {update_option('EWD_US_Timer_Bar', stripslashes_deep($_POST['timer_bar']));}
	if (isset($_POST['slide_indicators'])) {update_option('EWD_US_Slide_Indicators', stripslashes_deep($_POST['slide_indicators']));}
	if (isset($_POST['link_action'])) {update_option('EWD_US_Link_Action', stripslashes_deep($_POST['link_action']));}

	if (isset($_POST['slide_transition_effect']) and $US_Full_Version == "Yes") {update_option('EWD_US_Slide_Transition_Effect', stripslashes_deep($_POST['slide_transition_effect']));}
	if (isset($_POST['wc_product_image_slider']) and $US_Full_Version == "Yes") {update_option('EWD_US_WC_Product_Image_Slider', $_POST['wc_product_image_slider']);}
	if (isset($_POST['mobile_aspect_ratio']) and $US_Full_Version == "Yes") {update_option('EWD_US_Mobile_Aspect_Ratio', $_POST['mobile_aspect_ratio']);}
	if (isset($_POST['hide_on_mobile']) and $US_Full_Version == "Yes") {update_option('EWD_US_Hide_On_Mobile', $_POST['hide_on_mobile']);}
	if (isset($_POST['mobile_link_to_full']) and $US_Full_Version == "Yes") {update_option('EWD_US_Mobile_Link_To_Full', $_POST['mobile_link_to_full']);}
	if (isset($_POST['title_animate']) and $US_Full_Version == "Yes") {update_option('EWD_US_Title_Animate', stripslashes_deep($_POST['title_animate']));}
	if (isset($_POST['add_watermark']) and $US_Full_Version == "Yes") {update_option('EWD_US_Add_Watermark', stripslashes_deep($_POST['add_watermark']));}
	if (isset($_POST['lightbox']) and $US_Full_Version == "Yes") {update_option('EWD_US_Lightbox', stripslashes_deep($_POST['lightbox']));}

	if (isset($_POST['us_slide_title_font']) and $US_Full_Version == "Yes") {update_option('EWD_us_Slide_Title_Font', stripslashes_deep($_POST['us_slide_title_font']));}
	if (isset($_POST['us_slide_title_font_size']) and $US_Full_Version == "Yes") {update_option('EWD_us_Slide_Title_Font_Size', stripslashes_deep($_POST['us_slide_title_font_size']));}
	if (isset($_POST['us_slide_title_font_color']) and $US_Full_Version == "Yes") {update_option('EWD_us_Slide_Title_Font_Color', stripslashes_deep($_POST['us_slide_title_font_color']));}
	if (isset($_POST['us_slide_text_font']) and $US_Full_Version == "Yes") {update_option('EWD_us_Slide_Text_Font', stripslashes_deep($_POST['us_slide_text_font']));}
	if (isset($_POST['us_slide_text_font_size']) and $US_Full_Version == "Yes") {update_option('EWD_us_Slide_Text_Font_Size', stripslashes_deep($_POST['us_slide_text_font_size']));}
	if (isset($_POST['us_slide_text_font_color']) and $US_Full_Version == "Yes") {update_option('EWD_us_Slide_Text_Font_Color', stripslashes_deep($_POST['us_slide_text_font_color']));}

	if (isset($_POST['us_button_font']) and $US_Full_Version == "Yes") {update_option('EWD_us_Button_Font', stripslashes_deep($_POST['us_button_font']));}
	if (isset($_POST['us_button_font_size']) and $US_Full_Version == "Yes") {update_option('EWD_us_Button_Font_Size', stripslashes_deep($_POST['us_button_font_size']));}
	if (isset($_POST['us_button_background_color']) and $US_Full_Version == "Yes") {update_option('EWD_us_Button_Background_Color', stripslashes_deep($_POST['us_button_background_color']));}
	if (isset($_POST['us_button_border_color']) and $US_Full_Version == "Yes") {update_option('EWD_us_Button_Border_Color', stripslashes_deep($_POST['us_button_border_color']));}
	if (isset($_POST['us_button_text_color']) and $US_Full_Version == "Yes") {update_option('EWD_us_Button_Text_Color', stripslashes_deep($_POST['us_button_text_color']));}
	if (isset($_POST['us_button_background_hover_color']) and $US_Full_Version == "Yes") {update_option('EWD_us_Button_Background_Hover_Color', stripslashes_deep($_POST['us_button_background_hover_color']));}
	if (isset($_POST['us_button_border_hover_color']) and $US_Full_Version == "Yes") {update_option('EWD_us_Button_Border_Hover_Color', stripslashes_deep($_POST['us_button_border_hover_color']));}
	if (isset($_POST['us_button_text_hover_color']) and $US_Full_Version == "Yes") {update_option('EWD_us_Button_Text_Hover_Color', stripslashes_deep($_POST['us_button_text_hover_color']));}

	if (isset($_POST['us_arrow']) and $US_Full_Version == "Yes") {update_option('EWD_us_Arrow', stripslashes_deep($_POST['us_arrow']));}
	if (isset($_POST['us_arrow_background_shape']) and $US_Full_Version == "Yes") {update_option('EWD_us_Arrow_Background_Shape', stripslashes_deep($_POST['us_arrow_background_shape']));}
	if (isset($_POST['us_arrow_color']) and $US_Full_Version == "Yes") {update_option('EWD_us_Arrow_Color', stripslashes_deep($_POST['us_arrow_color']));}
	if (isset($_POST['us_arrow_font_size']) and $US_Full_Version == "Yes") {update_option('EWD_us_Arrow_Font_Size', stripslashes_deep($_POST['us_arrow_font_size']));}
	if (isset($_POST['us_arrow_background_color']) and $US_Full_Version == "Yes") {update_option('EWD_us_Arrow_Background_Color', stripslashes_deep($_POST['us_arrow_background_color']));}
	if (isset($_POST['us_arrow_background_size']) and $US_Full_Version == "Yes") {update_option('EWD_us_Arrow_Background_Size', stripslashes_deep($_POST['us_arrow_background_size']));}
	if (isset($_POST['us_clickable_area_background_color']) and $US_Full_Version == "Yes") {update_option('EWD_us_Clickable_Area_Background_Color', stripslashes_deep($_POST['us_clickable_area_background_color']));}
	if (isset($_POST['us_clickable_area_size']) and $US_Full_Version == "Yes") {update_option('EWD_us_Clickable_Area_Size', stripslashes_deep($_POST['us_clickable_area_size']));}
	if (isset($_POST['us_arrow_line_height']) and $US_Full_Version == "Yes") {update_option('EWD_us_Arrow_Line_Height', stripslashes_deep($_POST['us_arrow_line_height']));}

	$update_message = __("Options have been succesfully updated.", 'EWD_US');
	$update['Message'] = $update_message;
	$update['Message_Type'] = "Update";
	return $update;
}

?>
