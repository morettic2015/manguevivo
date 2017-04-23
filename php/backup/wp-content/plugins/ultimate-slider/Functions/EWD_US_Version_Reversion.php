<?php 
function EWD_US_Version_Reversion() {
	if (get_option("EWD_US_Trial_Happening") != "Yes" or time() < get_option("EWD_US_Trial_Expiry_Time")) {return;}

	update_option("EWD_US_Slide_Transition_Effect", "slide");
    update_option("EWD_US_Mobile_Aspect_Ratio", get_option("EWD_US_Aspect_Ratio"));
    update_option("EWD_US_Hide_On_Mobile", array('body', 'buttons'));
    update_option("EWD_US_Mobile_Link_To_Full", "No");
    update_option("EWD_US_Add_Watermark", "No");
    update_option("EWD_US_Title_Animate", "None");
    update_option("EWD_US_Lightbox", "No");

    update_option("EWD_us_Slide_Title_Font", "");
	update_option("EWD_us_Slide_Title_Font_Size", "");
	update_option("EWD_us_Slide_Title_Font_Color", "");
	update_option("EWD_us_Slide_Text_Font", "");
	update_option("EWD_us_Slide_Text_Font_Size", "");
	update_option("EWD_us_Slide_Text_Font_Color", "");
	update_option("EWD_us_Button_Font", "");
	update_option("EWD_us_Button_Font_Size", "");
	update_option("EWD_us_Button_Background_Color", "");
	update_option("EWD_us_Button_Border_Color", "");
	update_option("EWD_us_Button_Text_Color", "");
	update_option("EWD_us_Button_Background_Hover_Color", "");
	update_option("EWD_us_Button_Border_Hover_Color", "");
	update_option("EWD_us_Button_Text_Hover_Color", "");
	
	update_option("EWD_us_Arrow", "a");
	update_option("EWD_us_Arrow_Background_Shape", "None");
	update_option("EWD_us_Arrow_Color", "");
	update_option("EWD_us_Arrow_Font_Size", "");
	update_option("EWD_us_Arrow_Background_Color", "");
	update_option("EWD_us_Arrow_Background_Size", "");
	update_option("EWD_us_Clickable_Area_Background_Color", "");
	update_option("EWD_us_Clickable_Area_Size", "");
	update_option("EWD_us_Arrow_Line_Height", "1.25");

	update_option("EWD_US_Full_Version", "No");
	update_option("EWD_US_Trial_Happening", "No");
	delete_option("EWD_US_Trial_Expiry_Time");
}
add_action('admin_init', 'EWD_US_Version_Reversion');

?>