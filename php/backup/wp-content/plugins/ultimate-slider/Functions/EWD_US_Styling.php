<?php
function EWD_US_Add_Modified_Styles() {
	$StylesString = "<style>";

	$StylesString .=".ewd-slide .slideTitle { ";
		if (get_option("EWD_us_Slide_Title_Font") != "") {$StylesString .= "font-family:" .  get_option("EWD_us_Slide_Title_Font") . " !important;";}
		if (get_option("EWD_us_Slide_Title_Font_Size") != "") {$StylesString .= "font-size:" .  get_option("EWD_us_Slide_Title_Font_Size") . " !important;";}
		if (get_option("EWD_us_Slide_Title_Font_Color") != "") {$StylesString .="color:" . get_option("EWD_us_Slide_Title_Font_Color") . " !important;";}
	$StylesString .="}\n";
	$StylesString .=".ewd-slide .slideExcerpt { ";
		if (get_option("EWD_us_Slide_Text_Font") != "") {$StylesString .= "font-family:" .  get_option("EWD_us_Slide_Text_Font") . " !important;";}
		if (get_option("EWD_us_Slide_Text_Font_Size") != "") {$StylesString .= "font-size:" .  get_option("EWD_us_Slide_Text_Font_Size") . " !important;";}
		if (get_option("EWD_us_Slide_Text_Font_Color") != "") {$StylesString .= "color:" . get_option("EWD_us_Slide_Text_Font_Color") . " !important;";}
	$StylesString .="}\n";
	$StylesString .=".ewd-slide .slideButtons li a { ";
		if (get_option("EWD_us_Button_Font") != "") {$StylesString .= "font-family:" .  get_option("EWD_us_Button_Font") . " !important;";}
		if (get_option("EWD_us_Button_Font_Size") != "") {$StylesString .= "font-size:" .  get_option("EWD_us_Button_Font_Size") . " !important;";}
		if (get_option("EWD_us_Button_Background_Color") != "") {$StylesString .= "background:" . get_option("EWD_us_Button_Background_Color") . " !important;";}
		if (get_option("EWD_us_Button_Border_Color") != "") {$StylesString .= "border-color:" . get_option("EWD_us_Button_Border_Color") . " !important;";}
		if (get_option("EWD_us_Button_Text_Color") != "") {$StylesString .= "color:" . get_option("EWD_us_Button_Text_Color") . " !important;";}
	$StylesString .="}\n";
	$StylesString .=".ewd-slide .slideButtons li a:hover { ";
		if (get_option("EWD_us_Button_Background_Hover_Color") != "") {$StylesString .= "background:" . get_option("EWD_us_Button_Background_Hover_Color") . " !important;";}
		if (get_option("EWD_us_Button_Border_Hover_Color") != "") {$StylesString .= "border-color:" . get_option("EWD_us_Button_Border_Hover_Color") . " !important;";}
		if (get_option("EWD_us_Button_Text_Hover_Color") != "") {$StylesString .= "color:" . get_option("EWD_us_Button_Text_Hover_Color") . " !important;";}
	$StylesString .="}\n";
	$StylesString .=".slider .nav-arrow .ewd-slider-icon { ";
		if (get_option("EWD_us_Arrow_Color") != "") {$StylesString .= "color:" . get_option("EWD_us_Arrow_Color") . " !important;";}
		if (get_option("EWD_us_Arrow_Font_Size") != "") {$StylesString .= "font-size:" . get_option("EWD_us_Arrow_Font_Size") . " !important;";}
		if(get_option("EWD_us_Arrow_Line_Height") != ""){
			$StylesString .= "line-height:" . get_option("EWD_us_Arrow_Line_Height") . " !important;";
		}
		else{
			$StylesString .= "line-height: 1.25 !important;";
		}
	$StylesString .="}\n";
	$StylesString .=".slider .nav-arrow .ewd-us-arrow-div { ";
		$arrowBackgroundShape = get_option("EWD_us_Arrow_Background_Shape");
		if($arrowBackgroundShape != 'None'){
			if (get_option("EWD_us_Arrow_Background_Color") != "") {$StylesString .= "background:" . get_option("EWD_us_Arrow_Background_Color") . ";";}
		}
		else{
			$StylesString .= "background: transparent !important;";
		}
		if (get_option("EWD_us_Arrow_Background_Size") != "") {$StylesString .= "width:" . get_option("EWD_us_Arrow_Background_Size") . " !important;"; $StylesString .="height:" . get_option("EWD_us_Arrow_Background_Size") . " !important;";}
	$StylesString .="}\n";
	$StylesString .=".slider .nav-arrow { ";
		if (get_option("EWD_us_Clickable_Area_Background_Color") != "") {$StylesString .= "background:" . get_option("EWD_us_Clickable_Area_Background_Color") . " !important;";}
		if (get_option("EWD_us_Clickable_Area_Size") != "") {$StylesString .= "width:" . get_option("EWD_us_Clickable_Area_Size") . " !important;";}
	$StylesString .="}\n";
	$StylesString .="#timerBar { ";
		if (get_option("EWD_us_Timer_Bar") == "Top") {$StylesString .= "top: 0;";}
		if (get_option("EWD_us_Timer_Bar") == "Bottom") {$StylesString .= "bottom: 0;";}
	$StylesString .="}\n";

	if(is_admin_bar_showing()){
		$StylesString .= ".lg-outer { ";
			$StylesString .= "margin-top: 32px;";
		$StylesString .= "}\n";
		$StylesString .= ".lg-outer .lg-thumb-outer { ";
			$StylesString .= "bottom: 32px;";
		$StylesString .= "}\n";
		$StylesString .= "@media screen and (max-width: 782px) { ";
			$StylesString .= ".lg-outer { ";
				$StylesString .= "margin-top: 46px;";
			$StylesString .= "}\n";
			$StylesString .= ".lg-outer .lg-thumb-outer { ";
				$StylesString .= "bottom: 46px;";
			$StylesString .= "}\n";
		$StylesString .= "}\n";
	}

	$StylesString .= "</style>";

	return $StylesString;
}
