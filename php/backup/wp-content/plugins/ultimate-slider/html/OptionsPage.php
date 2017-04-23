<?php

$Custom_CSS = get_option("EWD_US_Custom_CSS");
$Autoplay_Slideshow = get_option("EWD_US_Autoplay_Slideshow");
$Autoplay_Delay = get_option("EWD_US_Autoplay_Delay");
$Autoplay_Interval = get_option("EWD_US_Autoplay_Interval");
$Transition_Time = get_option("EWD_US_Transition_Time");
$Aspect_Ratio = get_option("EWD_US_Aspect_Ratio");
$Carousel = get_option("EWD_US_Carousel");
$Carousel_Columns = get_option("EWD_US_Carousel_Columns");
$Carousel_Link_To_Full = get_option("EWD_US_Carousel_Link_To_Full");
$Carousel_Advance = get_option("EWD_US_Carousel_Advance");
$Show_TinyMCE = get_option("EWD_US_Show_TinyMCE");
$Timer_Bar = get_option("EWD_US_Timer_Bar");
$Slide_Indicators = get_option("EWD_US_Slide_Indicators");
$Link_Action = get_option("EWD_US_Link_Action");

$Slide_Transition_Effect = get_option("EWD_US_Slide_Transition_Effect");
$WC_Product_Image_Slider = get_option("EWD_US_WC_Product_Image_Slider");
$Mobile_Aspect_Ratio = get_option("EWD_US_Mobile_Aspect_Ratio");
$Hide_On_Mobile = get_option("EWD_US_Hide_On_Mobile");
$Mobile_Link_To_Full = get_option("EWD_US_Mobile_Link_To_Full");
$Title_Animate = get_option("EWD_US_Title_Animate");
$Add_Watermark = get_option("EWD_US_Add_Watermark");
$Lightbox = get_option("EWD_US_Lightbox");

$us_Slide_Title_Font = get_option("EWD_us_Slide_Title_Font");
$us_Slide_Title_Font_Size = get_option("EWD_us_Slide_Title_Font_Size");
$us_Slide_Title_Font_Color = get_option("EWD_us_Slide_Title_Font_Color");
$us_Slide_Text_Font = get_option("EWD_us_Slide_Text_Font");
$us_Slide_Text_Font_Size = get_option("EWD_us_Slide_Text_Font_Size");
$us_Slide_Text_Font_Color = get_option("EWD_us_Slide_Text_Font_Color");
$us_Button_Font = get_option("EWD_us_Button_Font");
$us_Button_Font_Size = get_option("EWD_us_Button_Font_Size");
$us_Button_Background_Color = get_option("EWD_us_Button_Background_Color");
$us_Button_Border_Color = get_option("EWD_us_Button_Border_Color");
$us_Button_Text_Color = get_option("EWD_us_Button_Text_Color");
$us_Button_Background_Hover_Color = get_option("EWD_us_Button_Background_Hover_Color");
$us_Button_Border_Hover_Color = get_option("EWD_us_Button_Border_Hover_Color");
$us_Button_Text_Hover_Color = get_option("EWD_us_Button_Text_Hover_Color");

$us_Arrow = get_option("EWD_us_Arrow");
$us_Arrow_Background_Shape = get_option("EWD_us_Arrow_Background_Shape");
$us_Arrow_Color = get_option("EWD_us_Arrow_Color");
$us_Arrow_Font_Size = get_option("EWD_us_Arrow_Font_Size");
$us_Arrow_Background_Color = get_option("EWD_us_Arrow_Background_Color");
$us_Arrow_Background_Size = get_option("EWD_us_Arrow_Background_Size");
$us_Clickable_Area_Background_Color = get_option("EWD_us_Clickable_Area_Background_Color");
$us_Clickable_Area_Size = get_option("EWD_us_Clickable_Area_Size");
$us_Arrow_Line_Height = get_option("EWD_us_Arrow_Line_Height");

//start review box
if(get_option('EWD_us_Hide_Dash_Review_Ask')){
	$hideReview = get_option('EWD_us_Hide_Dash_Review_Ask');
}
else {
	add_option('EWD_us_Hide_Dash_Review_Ask', 'No');
}
$hideReviewBox = $_POST["hide_us_review_box_hidden"];
if($hideReviewBox == 'Yes'){
	update_option('EWD_us_Hide_Dash_Review_Ask', 'Yes');
	header('Location: edit.php?post_type=ultimate_slider&page=us-options');
}
//end review box
?>


<?php if($hideReview != 'Yes'){ ?>
<div id='ewd-us-dashboard-leave-review' class='ewd-us-leave-review postbox upcp-postbox-collapsible'>
	<h3 class='hndle ewd-us-dashboard-h3'>Leave a Review <span></span></h3>
	<div class='ewd-dashboard-content'>
		<div class="ewd-dashboard-leave-review-text">
			If you enjoy this plugin and have a minute, please consider leaving a 5-star review. Thank you!
		</div>
		<a href="https://wordpress.org/support/plugin/ultimate-slider/reviews/" class="ewd-dashboard-leave-review-link" target="_blank">Leave a Review!</a>
		<div class="clear"></div>
	</div>
	<form action="edit.php?post_type=ultimate_slider&page=us-options" method="post">
		<input type="hidden" name="hide_us_review_box_hidden" value="Yes">
		<input type="submit" name="hide_us_review_box_submit" class="ewd-dashboard-leave-review-dismiss" value="I've already left a review">
	</form>
</div>
<div class="clear"></div>
<?php } ?>



<div class="wrap us-options-page-tabbed">
	<div class="us-options-submenu-div">
		<ul class="us-options-submenu us-options-page-tabbed-nav">
			<li><a id="Basic_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == '' or $Display_Tab == 'Basic') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('Basic');">Basic</a></li>
			<li><a id="Premium_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == 'Premium') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('Premium');">Premium</a></li>
			<li><a id="Styling_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == 'Styling') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('Styling');">Styling</a></li>
			<li><a id="Control_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == 'Control') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('Control');">Control</a></li>
		</ul>
	</div>

	<div class="us-options-page-tabbed-content">
		<form method="post" action="edit.php?post_type=ultimate_slider&page=us-options&Action=EWD_US_UpdateOptions">
			<div id='Basic' class='ewd-us-option-set'>
				<h2 id='label-basic-options' class='us-options-page-tab-title'>Basic Options</h2>
				<table class="form-table">
					<tr>
							<th scope="row">Custom CSS</th>
							<td>
								<fieldset><legend class="screen-reader-text"><span>Custom CSS</span></legend>
									<label title='Custom CSS'></label><textarea class='ewd-us-textarea' name='custom_css'> <?php echo $Custom_CSS; ?></textarea><br />
									<p>You can add custom CSS styles to your slider in the box above.</p>
								</fieldset>
							</td>
						</tr>

					<tr>
						<th scope="row">Autoplay Slideshow</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Autoplay Slideshow</span></legend>
								<label title='Yes'><input type='radio' name='slider-autoplay' value='Yes' <?php if($Autoplay_Slideshow == "Yes") {echo "checked='checked'";} ?> /> <span>Yes</span></label><br />
								<label title='No'><input type='radio' name='slider-autoplay' value='No' <?php if($Autoplay_Slideshow  == "No") {echo "checked='checked'";} ?> /> <span>No</span></label><br />
								<p>Should the slider automatically toggle through slides?</p>
							</fieldset>
						</td>
					</tr>

					<tr>
						<th scope="row">Autoplay Delay (seconds)</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Autoplay Delay (seconds)</span></legend>
								<input type='text' name='autoplay_delay' value='<?php echo $Autoplay_Delay; ?>' />
								<p>If autoplay is on, how long should should the timer wait before starting the slideshow? (Should be greater than 0)</p>
							</fieldset>
						</td>
					</tr>

					<tr>
						<th scope="row">Autoplay Interval (seconds)</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Autoplay Interval (seconds)</span></legend>
								<input type='text' name='autoplay_interval' value='<?php echo $Autoplay_Interval; ?>' />
								<p>If autoplay is on, how long should the slideshow wait between each slide? (Should be greater than 0)</p>
							</fieldset>
						</td>
					</tr>

					<tr>
						<th scope="row">Slide Transition Time (seconds)</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Slider Transition Time (seconds)</span></legend>
								<input type='text' name='transition_time' value='<?php echo $Transition_Time; ?>' />
								<p>How long should each transition take to complete?</p>
							</fieldset>
						</td>
					</tr>

					<tr>
						<th scope="row">Aspect Ratio</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Aspect Ratio</span></legend>
								<select name="aspect_ratio">
							  		<option value="3_1" <?php if($Aspect_Ratio == "3_1") {echo "selected=selected";} ?> >3:1</option>
							  		<option value="16_7" <?php if($Aspect_Ratio == "16_7") {echo "selected=selected";} ?> >16:7 (default)</option>
									<option value="2_1" <?php if($Aspect_Ratio == "2_1") {echo "selected=selected";} ?> >2:1</option>
							  		<option value="16_9" <?php if($Aspect_Ratio == "16_9") {echo "selected=selected";} ?> >16:9</option>
							  		<option value="3_2" <?php if($Aspect_Ratio == "3_2") {echo "selected=selected";} ?> >3:2</option>
							  		<option value="4_3" <?php if($Aspect_Ratio == "4_3") {echo "selected=selected";} ?> >4:3</option>
							  		<option value="1_1" <?php if($Aspect_Ratio == "1_1") {echo "selected=selected";} ?> >1:1</option>
								</select>
							</fieldset>
						</td>
					</tr>

					<tr>
						<th scope="row">Carousel</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Carousel</span></legend>
								<label title='Yes'><input type='radio' name='slider_carousel' value='Yes' <?php if($Carousel == "Yes") {echo "checked='checked'";} ?> /> <span>Yes</span></label><br />
								<label title='No'><input type='radio' name='slider_carousel' value='No' <?php if($Carousel  == "No") {echo "checked='checked'";} ?> /> <span>No</span></label><br />
								<p>Display a carousel slider instead of the default. <em>Slide Transition Effect</em> has to be set to <em>Default</em>.</p>
							</fieldset>
						</td>
					</tr>

					<tr>
						<th scope="row">Carousel Number of Columns</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Carousel Number of Columns</span></legend>
								<label title='2'><input type='radio' name='carousel_columns' value='2' <?php if($Carousel_Columns == "2") {echo "checked='checked'";} ?> /> <span>2</span></label><br />
								<label title='3'><input type='radio' name='carousel_columns' value='3' <?php if($Carousel_Columns  == "3") {echo "checked='checked'";} ?> /> <span>3</span></label><br />
								<label title='4'><input type='radio' name='carousel_columns' value='4' <?php if($Carousel_Columns  == "4") {echo "checked='checked'";} ?> /> <span>4</span></label><br />
							</fieldset>
						</td>
					</tr>

					<tr>
						<th scope="row">Carousel Link to Full Post?</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Carousel Link to Full Post</span></legend>
								<label title='Yes'><input type='radio' name='carousel_link_to_full' value='Yes' <?php if($Carousel_Link_To_Full == "Yes") {echo "checked='checked'";} ?> /> <span>Yes</span></label><br />
								<label title='No'><input type='radio' name='carousel_link_to_full' value='No' <?php if($Carousel_Link_To_Full  == "No") {echo "checked='checked'";} ?> /> <span>No</span></label><br />
							</fieldset>
						</td>
					</tr>

						<tr>
							<th scope="row">Carousel Advance</th>
							<td>
								<fieldset><legend class="screen-reader-text"><span>Carousel Advance</span></legend>
									<label title='Full'><input type='radio' name='carousel_advance' value='Full' <?php if($Carousel_Advance == "Full") {echo "checked='checked'";} ?> /> <span>Full</span></label><br />
									<label title='OneImage'><input type='radio' name='carousel_advance' value='OneImage' <?php if($Carousel_Advance  == "OneImage") {echo "checked='checked'";} ?> /> <span>One Image</span></label><br />
								</fieldset>
							</td>
						</tr>

						<tr>
						<th scope="row">Show Editor Helper</th>
							<td>
								<fieldset><legend class="screen-reader-text"><span>Show Editor Helper</span></legend>
								<label title='Yes'><input type='radio' name='show_tinymce' value='Yes' <?php if($Show_TinyMCE == "Yes") {echo "checked='checked'";} ?> /> <span>Yes</span></label><br />
								<label title='No'><input type='radio' name='show_tinymce' value='No' <?php if($Show_TinyMCE == "No") {echo "checked='checked'";} ?> /> <span>No</span></label><br />
								<p>Should the shortcode builder be shown above the WordPress page/post editor, in the toolbar buttons?</p>
								</fieldset>
							</td>
						</tr>

						<tr>
						<th scope="row">Timer Bar</th>
							<td>
								<fieldset><legend class="screen-reader-text"><span>Timer Bar</span></legend>
								<label title='Top'><input type='radio' name='timer_bar' value='Top' <?php if($Timer_Bar == "Top") {echo "checked='checked'";} ?> /> <span>Top</span></label><br />
								<label title='Bottom'><input type='radio' name='timer_bar' value='Bottom' <?php if($Timer_Bar == "Bottom") {echo "checked='checked'";} ?> /> <span>Bottom</span></label><br />
								<label title='Off'><input type='radio' name='timer_bar' value='Off' <?php if($Timer_Bar == "Off") {echo "checked='checked'";} ?> /> <span>Off</span></label><br />
								<p>Display a timer bar at the top or bottom of your slider.</p>
								</fieldset>
							</td>
						</tr>

						<tr>
						<th scope="row">Slide Indicators</th>
							<td>
								<fieldset><legend class="screen-reader-text"><span>Slide Indicators</span></legend>
								<label title='None'><input type='radio' name='slide_indicators' value='None' <?php if($Slide_Indicators == "None") {echo "checked='checked'";} ?> /> <span>None</span></label><br />
								<label title='Dots'><input type='radio' name='slide_indicators' value='Dots' <?php if($Slide_Indicators == "Dots") {echo "checked='checked'";} ?> /> <span>Dots</span></label><br />
								<label title='Thumbnails'><input type='radio' name='slide_indicators' value='Thumbnails' <?php if($Slide_Indicators == "Thumbnails") {echo "checked='checked'";} ?> /> <span>Thumbnails</span></label><br />
								<p>Display navigation controls to jump between slides.</p>
								</fieldset>
							</td>
						</tr>

						<tr>
						<th scope="row">Button Link Action</th>
							<td>
								<fieldset><legend class="screen-reader-text"><span>Button Link Action</span></legend>
								<label title='Same'><input type='radio' name='link_action' value='Same' <?php if($Link_Action == "Same") {echo "checked='checked'";} ?> /> <span>Same Window</span></label><br />
								<label title='New'><input type='radio' name='link_action' value='New' <?php if($Link_Action == "New") {echo "checked='checked'";} ?> /> <span>New Window</span></label><br />
								<label title='Smart'><input type='radio' name='link_action' value='Smart' <?php if($Link_Action == "Smart") {echo "checked='checked'";} ?> /> <span>Smart</span></label><br />
								<p>Should button links open in the same or new windows? "Smart" opens external links in new windows and links on your site in the same window.</p>
								</fieldset>
							</td>
						</tr>

				</table>
			</div>

			<div id='Premium' class='ewd-us-option-set ewd-us-hidden'>
				<h2 id='label-premium-options' class='us-options-page-tab-title'>Premium Options</h2>
				<table class="form-table">
					<tr>
						<th scope="row">Slide Transition Effect</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Slide Transition Effect</span></legend>
								<label title='Default'><input type='radio' name='slide_transition_effect' value='slide' <?php if($Slide_Transition_Effect == "slide") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Default</span></label><br />
								<label title='Fade'><input type='radio' name='slide_transition_effect' value='fade' <?php if($Slide_Transition_Effect  == "fade") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Fade</span></label><br />
								<label title='SlideUp'><input type='radio' name='slide_transition_effect' value='slide-up' <?php if($Slide_Transition_Effect  == "slide-up") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Slide Up</span></label><br />
								<label title='SlideDown'><input type='radio' name='slide_transition_effect' value='slide-down' <?php if($Slide_Transition_Effect  == "slide-down") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Slide Down</span></label><br />
								<label title='StretchRight'><input type='radio' name='slide_transition_effect' value='stretch-right' <?php if($Slide_Transition_Effect  == "stretch-right") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Stretch Right</span></label><br />
								<label title='StretchLeft'><input type='radio' name='slide_transition_effect' value='stretch-left' <?php if($Slide_Transition_Effect  == "stretch-left") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Stretch Left</span></label><br />
								<label title='Grow'><input type='radio' name='slide_transition_effect' value='grow' <?php if($Slide_Transition_Effect  == "grow") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Grow</span></label><br />
								<label title='Expand'><input type='radio' name='slide_transition_effect' value='expand' <?php if($Slide_Transition_Effect  == "expand") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Expand</span></label><br />
								<p>Which effect should be used to transition between slides?</p>
							</fieldset>
						</td>
					</tr>

					<tr>
						<th scope="row">WooCommerce Product Image Slider</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>WooCommerce Product Image Slider</span></legend>
								<label title='Yes'><input type='radio' name='wc_product_image_slider' value='Yes' <?php if($WC_Product_Image_Slider == "Yes") {echo "checked='checked'";} ?> /> <span>Yes</span></label><br />
								<label title='No'><input type='radio' name='wc_product_image_slider' value='No' <?php if($WC_Product_Image_Slider  == "No") {echo "checked='checked'";} ?> /> <span>No</span></label><br />
								<p>Should the WooCommerce product page image be converted into a slider when there's more than one image? (Might require changing the "Aspect Ratio" option for the slider, depending on the theme you're using)</p>
							</fieldset>
						</td>
					</tr>


					<tr>
						<th scope="row">Mobile Aspect Ratio</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Mobile Aspect Ratio</span></legend>
								<select name="mobile_aspect_ratio">
							  		<option value="3_1" <?php if($Mobile_Aspect_Ratio == "3_1") {echo "selected=selected";} ?> >3:1</option>
							  		<option value="16_7" <?php if($Mobile_Aspect_Ratio == "16_7") {echo "selected=selected";} ?> >16:7 (default)</option>
									<option value="2_1" <?php if($Mobile_Aspect_Ratio == "2_1") {echo "selected=selected";} ?> >2:1</option>
							  		<option value="16_9" <?php if($Mobile_Aspect_Ratio == "16_9") {echo "selected=selected";} ?> >16:9</option>
							  		<option value="3_2" <?php if($Mobile_Aspect_Ratio == "3_2") {echo "selected=selected";} ?> >3:2</option>
							  		<option value="4_3" <?php if($Mobile_Aspect_Ratio == "4_3") {echo "selected=selected";} ?> >4:3</option>
							  		<option value="1_1" <?php if($Mobile_Aspect_Ratio == "1_1") {echo "selected=selected";} ?> >1:1</option>
								</select>
								<p>What should the aspect ratio of the slider be on smaller screens?</p>
							</fieldset>
						</td>
					</tr>

					<tr>
						<th scope="row">Hide Elements from Mobile View</th>
						<td>
						    <fieldset><legend class="screen-reader-text"><span>Hide Elements from Mobile View</span></legend>
						        <label title='title'><input type='checkbox' name='hide_on_mobile[]' value='title' <?php if(in_array("title", $Hide_On_Mobile)) {echo "checked='checked'";} ?> /> <span>Title</span></label><br />
						        <label title='body'><input type='checkbox' name='hide_on_mobile[]' value='body' <?php if(in_array("body", $Hide_On_Mobile)) {echo "checked='checked'";} ?> /> <span>Body</span></label><br />
						        <label title='buttons'><input type='checkbox' name='hide_on_mobile[]' value='buttons' <?php if(in_array("buttons", $Hide_On_Mobile)) {echo "checked='checked'";} ?> /> <span>Buttons</span></label><br />
						        <label title='arrows'><input type='checkbox' name='hide_on_mobile[]' value='arrows' <?php if(in_array("arrows", $Hide_On_Mobile)) {echo "checked='checked'";} ?> /> <span>Arrows</span></label><br />
						        <label title='thumbnails'><input type='checkbox' name='hide_on_mobile[]' value='thumbnails' <?php if(in_array("thumbnails", $Hide_On_Mobile)) {echo "checked='checked'";} ?> /> <span>Thumbnails</span></label><br />
						    </fieldset>
						</td>
					</tr>

					<tr>
						<th scope="row">Mobile Link to Full Post?</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Mobile Link to Full Post</span></legend>
								<label title='Yes'><input type='radio' name='mobile_link_to_full' value='Yes' <?php if($Mobile_Link_To_Full == "Yes") {echo "checked='checked'";} ?> /> <span>Yes</span></label><br />
								<label title='No'><input type='radio' name='mobile_link_to_full' value='No' <?php if($Mobile_Link_To_Full  == "No") {echo "checked='checked'";} ?> /> <span>No</span></label><br />
							</fieldset>
						</td>
						<p>Should clicking on a slide bring up the individual slide post on mobile?</p>
					</tr>

					<tr>
						<th scope="row">Title Animation</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Title Animation</span></legend>
								<label title='None'><input type='radio' name='title_animate' value='None' <?php if($Title_Animate == "None") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>None</span></label><br />
								<label title='SlideFromLeft'><input type='radio' name='title_animate' value='SlideFromLeft' <?php if($Title_Animate == "SlideFromLeft") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Slide From Left</span></label><br />
								<label title='SlideFromRight'><input type='radio' name='title_animate' value='SlideFromRight' <?php if($Title_Animate == "SlideFromRight") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Slide From Right</span></label><br />
								<label title='FadeIn'><input type='radio' name='title_animate' value='FadeIn' <?php if($Title_Animate == "FadeIn") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Fade In</span></label><br />
								<label title='ScrollDown'><input type='radio' name='title_animate' value='ScrollDown' <?php if($Title_Animate == "ScrollDown") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Scroll Down</span></label><br />
							</fieldset>
						</td>
					</tr>

					<tr>
						<th scope="row">Add Watermark</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Add Watermark</span></legend>
							<label title='Yes'><input type='radio' name='add_watermark' value='Yes' <?php if($Add_Watermark == "Yes") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Yes</span></label><br />
							<label title='No'><input type='radio' name='add_watermark' value='No' <?php if($Add_Watermark == "No") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>No</span></label><br />
							<p>Should a watermark be added to each image? Requires GD PHP module to be installed on your server.</p>
							</fieldset>
						</td>
					</tr>

					<tr>
						<th scope="row">Lightbox on Image Click</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Lightbox on Image Click</span></legend>
							<label title='Yes'><input type='radio' name='lightbox' value='Yes' <?php if($Lightbox == "Yes") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Yes</span></label><br />
							<label title='No'><input type='radio' name='lightbox' value='No' <?php if($Lightbox == "No") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span>No</span></label><br />
							<p>Should a lightbox be opened when an image is clicked on? Particularly useful if you're using carousel mode.</p>
							</fieldset>
						</td>
					</tr>

				</table>
			</div>

			<div id='Styling' class='ewd-us-option-set ewd-us-hidden'>
				<h2 id='label-styling-options' class='us-options-page-tab-title'>Styling Options</h2>

				<h3>Premium Styling Options</h3>
				<div id='us-styling-options' class="us-options-div us-options-flex">
					<div class='us-subsection'>
						<div class='us-subsection-header'>Slide Title</div>
						<div class='us-subsection-content'>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Font Family</div>
								<div class='us-option-input'><input type='text' name='us_slide_title_font' value='<?php echo $us_Slide_Title_Font; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Font Size</div>
								<div class='us-option-input'><input type='text' name='us_slide_title_font_size' value='<?php echo $us_Slide_Title_Font_Size; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Font Color</div>
								<div class='us-option-input'><input type='text' class='ewd-us-spectrum' name='us_slide_title_font_color' value='<?php echo $us_Slide_Title_Font_Color; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
						</div>
					</div>
					<div class='us-subsection'>
						<div class='us-subsection-header'>Slide Text</div>
						<div class='us-subsection-content'>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Font Family</div>
								<div class='us-option-input'><input type='text' name='us_slide_text_font' value='<?php echo $us_Slide_Text_Font; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Font Size</div>
								<div class='us-option-input'><input type='text' name='us_slide_text_font_size' value='<?php echo $us_Slide_Text_Font_Size; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Font Color</div>
								<div class='us-option-input'><input type='text' class='ewd-us-spectrum' name='us_slide_text_font_color' value='<?php echo $us_Slide_Text_Font_Color; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
						</div>
					</div>
					<div class='us-subsection'>
						<div class='us-subsection-header'>Slide Buttons</div>
						<div class='us-subsection-content'>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Font Family</div>
								<div class='us-option-input'><input type='text' name='us_button_font' value='<?php echo $us_Button_Font; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Font Size</div>
								<div class='us-option-input'><input type='text' name='us_button_font_size' value='<?php echo $us_Button_Font_Size; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Background Color</div>
								<div class='us-option-input'><input type='text' class='ewd-us-spectrum' name='us_button_background_color' value='<?php echo $us_Button_Background_Color; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Border Color</div>
								<div class='us-option-input'><input type='text' class='ewd-us-spectrum' name='us_button_border_color' value='<?php echo $us_Button_Border_Color; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Text Color</div>
								<div class='us-option-input'><input type='text' class='ewd-us-spectrum' name='us_button_text_color' value='<?php echo $us_Button_Text_Color; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Background Hover Color</div>
								<div class='us-option-input'><input type='text' class='ewd-us-spectrum' name='us_button_background_hover_color' value='<?php echo $us_Button_Background_Hover_Color; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Border Hover Color</div>
								<div class='us-option-input'><input type='text' class='ewd-us-spectrum' name='us_button_border_hover_color' value='<?php echo $us_Button_Border_Hover_Color; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Text Hover Color</div>
								<div class='us-option-input'><input type='text' class='ewd-us-spectrum' name='us_button_text_hover_color' value='<?php echo $us_Button_Text_Hover_Color; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
						</div> <!-- us-subsection-content -->
					</div> <!-- us-subsection -->
				</div> <!-- us-styling-options -->
			</div> <!-- Styling -->

			<div id='Control' class='ewd-us-option-set ewd-us-hidden'>
				<h2 id='label-styling-options' class='us-options-page-tab-title'>Control Options</h2>

				<h3>Premium Control Options</h3>
				<div id='us-styling-options' class="us-options-div us-options-flex">
					<div class='us-subsection'>
						<div class='us-subsection-header'>Arrows</div>
						<div class='us-subsection-content'>
							<div class='us-option us-styling-option'>
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='None' <?php if ($us_Arrow == "None") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> No Arrow</div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='a' <?php if ($us_Arrow == "a") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>b</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='c' <?php if ($us_Arrow == "c") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>d</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='e' <?php if ($us_Arrow == "e") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>f</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='g' <?php if ($us_Arrow == "g") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>h</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='i' <?php if ($us_Arrow == "i") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>j</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='k' <?php if ($us_Arrow == "k") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>l</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='m' <?php if ($us_Arrow == "m") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>n</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='o' <?php if ($us_Arrow == "o") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>p</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='q' <?php if ($us_Arrow == "q") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>r</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='A' <?php if ($us_Arrow == "A") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>B</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='E' <?php if ($us_Arrow == "E") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>F</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='G' <?php if ($us_Arrow == "G") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>H</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='I' <?php if ($us_Arrow == "I") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>J</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='K' <?php if ($us_Arrow == "K") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>L</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='M' <?php if ($us_Arrow == "M") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>N</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='O' <?php if ($us_Arrow == "O") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>P</span></div><br />
								<div class='us-option-one-line'><input type='radio' name='us_arrow' value='Q' <?php if ($us_Arrow == "Q") {echo "checked='checked'";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> <span class='us-arrow'>R</span></div><br />
							</div>
						</div>
					</div>
					<div class='us-subsection'>
						<div class='us-subsection-header'>Background Shape</div>
						<div class='us-subsection-content'>
							<div class='us-option us-styling-option'>
								<div class='us-option-one-line'><input type='radio' name='us_arrow_background_shape' value='None' <?php if ($us_Arrow_Background_Shape == "None") {echo "checked=checked";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> No Background</div>
								<div class='us-option-one-line'><input type='radio' name='us_arrow_background_shape' value='Square' <?php if ($us_Arrow_Background_Shape == "Square") {echo "checked=checked";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> Square</div>
								<div class='us-option-one-line'><input type='radio' name='us_arrow_background_shape' value='Circle' <?php if ($us_Arrow_Background_Shape == "Circle") {echo "checked=checked";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> Circle</div>
								<div class='us-option-one-line'><input type='radio' name='us_arrow_background_shape' value='Diamond' <?php if ($us_Arrow_Background_Shape == "Diamond") {echo "checked=checked";} ?> <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /> Diamond</div>
							</div>
						</div>
					</div>
					<div class='us-subsection'>
						<div class='us-subsection-header'>Customize</div>
						<div class='us-subsection-content'>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Arrow Color</div>
								<div class='us-option-input'><input type='text' class='ewd-us-spectrum' name='us_arrow_color' value='<?php echo $us_Arrow_Color; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Arrow Size</div>
								<div class='us-option-input'><input type='text' name='us_arrow_font_size' value='<?php echo $us_Arrow_Font_Size; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Arrow Background Color</div>
								<div class='us-option-input'><input type='text' class='ewd-us-spectrum' name='us_arrow_background_color' value='<?php echo $us_Arrow_Background_Color; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Arrow Background Size</div>
								<div class='us-option-input'><input type='text' name='us_arrow_background_size' value='<?php echo $us_Arrow_Background_Size; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Clickable Area Color<br /> (Blank for transparent)</div>
								<div class='us-option-input'><input type='text' class='ewd-us-spectrum' name='us_clickable_area_background_color' value='<?php echo $us_Clickable_Area_Background_Color; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Clickable Area Size</div>
								<div class='us-option-input'><input type='text' name='us_clickable_area_size' value='<?php echo $us_Clickable_Area_Size; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
							<div class='us-option us-styling-option'>
								<div class='us-option-label'>Line Height Of Arrow Within<br />Background (e.g. "1.25")</div>
								<div class='us-option-input'><input type='text' name='us_arrow_line_height' value='<?php echo $us_Arrow_Line_Height; ?>' <?php if ($US_Full_Version != "Yes") {echo "disabled";} ?> /></div>
							</div>
						</div> <!-- us-subsection-content -->
					</div> <!-- us-subsection -->
				</div> <!-- us-controls-options -->
			</div> <!-- Controls -->

			<p class="submit"><input type="submit" name="Options_Submit" id="submit" class="button button-primary" value="Save Changes"  /></p>
		</form>
	</div> <!-- us-options-page-tabbed-content -->
