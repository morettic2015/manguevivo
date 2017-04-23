<?php
function EWD_US_Add_Meta_Boxes () {
	add_meta_box("slide-meta", __("Slide Options", 'EWD_US'), "EWD_US_Meta_Box", "ultimate_slider", "normal", "high");
}
add_action( 'add_meta_boxes', 'EWD_US_Add_Meta_Boxes' );

function EWD_US_Meta_Box( $post ) {
	global $wpdb;
	global $items_table_name;
	global $US_Full_Version;

	$Global_Max_Title_Chars = get_option("EWD_US_Global_Max_Title_Chars");
	$Global_Max_Body_Chars = get_option("EWD_US_Global_Max_Body_Chars");

	$Content_Type = get_post_meta($post->ID, "EWD_US_Content_Type", true);
	$UPCP_Product_ID = get_post_meta($post->ID, "EWD_US_UPCP_Product_ID", true);
	$WC_Product_ID = get_post_meta($post->ID, "EWD_US_WC_Product_ID", true);
	$Max_Title_Chars = get_post_meta($post->ID, "EWD_US_Max_Title_Chars", true);
	$Max_Body_Chars = get_post_meta($post->ID, "EWD_US_Max_Body_Chars", true);
	$Image_Type = get_post_meta($post->ID, "EWD_US_Image_Type", true);
	$YouTube_URL = get_post_meta($post->ID, "EWD_US_YouTube_URL", true);
	$Buttons = get_post_meta($post->ID, "EWD_US_Buttons", true);
	if (!is_array($Buttons)) {$Buttons = array();}

	if ($Max_Title_Chars == "") {$Max_Title_Chars = $Global_Max_Title_Chars;}
	if ($Max_Body_Chars == "") {$Max_Body_Chars = $Global_Max_Body_Chars;}

	$UPCP_Products = $wpdb->get_results("SELECT Item_ID, Item_Name FROM $items_table_name");
	$WC_Products = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_type='product'");

	$Post_Links = EWD_US_Get_Post_IDs('Yes');

	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'EWD_US_Save_Meta_Box_Data', 'EWD_US_meta_box_nonce' );

	echo "<div class='ewd-us-meta-menu'>";
	echo "<div class='ewd-us-meta-menu-item meta-menu-tab-active' id='Menu_Content'>" . __("Content", 'EWD_US') . "</div>";
	echo "<div class='ewd-us-meta-menu-item' id='Menu_Buttons'>" . __("Buttons", 'EWD_US') . "</div>";
	echo "<div class='ewd-us-meta-menu-item' id='Menu_Images'>" . __("Image", 'EWD_US') . "</div>";
	echo "</div>";

	echo "<div class='ewd-us-meta-body' id='Body_Content'>";
	echo "<h3>" . __("Content Type", 'EWD_US') . "</h3>";
	echo "<div class='ewd-us-meta-option-radio'>";
	echo "<input type='radio' name='content_type' value='current_post' ";
	if ($Content_Type == "current_post" or $Content_Type == "") {echo "checked='checked'";}
	echo "/>";
	echo "</div>";
	echo "<div class='ewd-us-meta-option-explanation'>";
	echo __("Use this post's content", 'EWD_US');
	echo "</div>";
	echo "<div class='ewd-us-meta-option-radio'>";
	echo "<input type='radio' name='content_type' value='upcp_product' ";
	if ($Content_Type == "upcp_product") {echo "checked='checked'";}
	if (sizeOf($UPCP_Products) == 0) {echo "disabled";}
	echo "/>";
	echo "</div>";
	echo "<div class='ewd-us-meta-option-explanation'>";
	echo __("Use UPCP product content", 'EWD_US');
	if (sizeOf($UPCP_Products) > 0) {
		echo "<select name='upcp_products'>";
		foreach ($UPCP_Products as $Product) {
			echo "<option value='" . $Product->Item_ID . "' ";
			if ($Content_Type == "upcp_product" and $Product->Item_ID == $UPCP_Product_ID) {echo "selected='selected'";}
			echo ">" . $Product->Item_Name . "</option>";
		}
		echo "</select>";
	}
	echo "</div>";
	echo "<div class='ewd-us-meta-option-radio'>";
	echo "<input type='radio' name='content_type' value='woocommerce_product' ";
	if ($Content_Type == "woocommerce_product") {echo "checked='checked'";}
	if (sizeOf($WC_Products) == 0) {echo "disabled";}
	echo "/>";
	echo "</div>";
	echo "<div class='ewd-us-meta-option-explanation'>";
	echo __("Use WooCommerce product content", 'EWD_US');
	if (sizeOf($WC_Products) > 0) {
		echo "<select name='wc_products'>";
		foreach ($WC_Products as $Product) {
			echo "<option value='" . $Product->ID . "' ";
			if ($Content_Type == "woocommerce_product" and $Product->Item_ID == $WC_Product_ID) {echo "selected='selected'";}
			echo ">" . $Product->post_title . "</option>";
		}
		echo "</select>";
	}
	echo "</div>";

	echo "<div class='ewd-us-meta-divider'></div>";

	echo "<div class='ewd-us-meta-sinle-line'>";
	echo __("Max Title Characters", 'EWD_US') . ": " . "<input type='text' name='max_title_chars' value='" . $Max_Title_Chars . "' />";
	echo "</div>";
	echo "<div class='ewd-us-meta-sinle-line'>";
	echo __("Max Body Characters", 'EWD_US') . ": " . "<input type='text' name='max_body_chars' value='" . $Max_Body_Chars . "' />";
	echo "</div>";
	echo "</div>";

	echo "<div class='ewd-us-meta-body ewd-us-hidden' id='Body_Buttons'>";
	echo "<h3>" . __("Buttons", 'EWD_US') . "</h3>";
	echo "<table id='ewd-us-buttons-list-table'>";
	echo "<tr>";
	echo "<th></th>";
	echo "<th>" . __("Text", 'EWD_US') . "</th>";
	echo "<th>" . __("Link Type", 'EWD_US') . "</th>";
	echo "<th>" . __("Custom Link", 'EWD_US') . "</th>";
	echo "</tr>";
	$Counter = 0;
	foreach ($Buttons as $Button) { 
		echo "<tr id='ewd-us-button-list-item-" . $Counter . "'>";
		echo "<td><a class='ewd-us-delete-button-list-item' data-buttonid='" . $Counter . "'>Delete</a></td>";
		echo "<td><input type='text' name='Button_List_" . $Counter . "_Text' value='" . $Button['Text'] . "'/></td>";
		echo "<td><select name='Button_List_" . $Counter . "_Post_ID' class='ewd-us-post-select' id='ewd-us-post-select-" . $Counter . "'>";
		echo "<option value='0'>" . __("Custom Link", 'EWD_US') . "</option>";
		foreach ($Post_Links as $Post) {
			echo "<option value='" . $Post->ID . "' ";
			if ($Post->ID == $Button['Post_ID']) {echo "selected=selected";}
			echo ">" . $Post->post_title . "</option>";
		}
		echo "</select></td>";
		echo "<td><input type='text' name='Button_List_" . $Counter . "_Custom_Link' value='" . $Button['Custom_Link'] . "' id='ewd-us-post-link-" . $Counter . "'/></td>";
		echo "</tr>";
		$Counter++;
	} 
	echo "<tr><td colspan='4'><a class='ewd-us-add-button-list-item' data-nextid='" . $Counter . "'>Add</a></td></tr>";
	echo "</table>";
	echo "</div>";
 ?>

	<div class='ewd-us-meta-body ewd-us-hidden' id='Body_Images'>
		<h3> <?php _e("Image Options", 'EWD_US'); ?> </h3>
		<div class='ewd-us-meta-option-radio'>
			<input type='radio' class='ewd-us-image-radio' name='use_image' value='featured' <?php if ($Image_Type == "featured" or $Image_Type == "") {echo "checked='checked'";} ?> />
		</div>
		<div class='ewd-us-meta-option-explanation'>
			<?php _e("Use post's featured image", 'EWD_US'); ?>
		</div>
		<?php if ($US_Full_Version == "Yes") { ?>
			<div class='ewd-us-meta-option-radio'>
				<input type='radio' class='ewd-us-image-radio' name='use_image' value='youtube_video' <?php if ($Image_Type == "youtube_video") {echo "checked='checked'";} ?> />
			</div>
			<div class='ewd-us-meta-option-explanation'>
				<?php _e("Use YouTube URL:", 'EWD_US'); ?>
			</div>
			<div class='ewd-us-meta-option-radio'>
				<input type='text' id='ewd-us-youtube-url' name='youtube_url' value='<?php echo $YouTube_URL; ?>' <?php if ($Image_Type != "youtube_video") {echo "disabled";} ?> />
			</div>
		<?php } else { ?>
			<div class='ewd-us-upgrade'>
			<a href="http://www.etoilewebdesign.com/plugins/ultimate-slider/"><?php _e("Upgrade to the full version ", "EWD_US"); ?></a><?php _e("to be create YouTube video slides.", 'EWD_US'); ?>
			</div>
		<?php } ?>
	</div>

	<div class='ewd-us-clear'></div>
<?php
}

add_action( 'save_post', 'EWD_US_Save_Meta_Box_Data' );
function EWD_US_Save_Meta_Box_Data($post_id) {
	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['EWD_US_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['EWD_US_meta_box_nonce'], 'EWD_US_Save_Meta_Box_Data' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* OK, it's safe for us to save the data now. If there's no product name, don't save any other information.*/
	// Sanitize user input.
	$Max_Title_Chars = sanitize_text_field( $_POST['max_title_chars'] );
	$Max_Body_Chars = sanitize_text_field( $_POST['max_body_chars'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'EWD_US_Content_Type', $_POST['content_type'] );
	if ($_POST['content_type'] == 'upcp_product') {update_post_meta( $post_id, 'EWD_US_UPCP_Product_ID', $_POST['upcp_products'] );}
	if ($_POST['content_type'] == 'woocommerce_product') {update_post_meta( $post_id, 'EWD_US_WC_Product_ID', $_POST['wc_products'] );}
	update_post_meta( $post_id, 'EWD_US_Max_Title_Chars', $Max_Title_Chars );
	update_post_meta( $post_id, 'EWD_US_Max_Body_Chars', $Max_Body_Chars );

	$Counter = 0;
	while ($Counter < 30) {
		if (isset($_POST['Button_List_' . $Counter . '_Text'])) {
			$Prefix = 'Button_List_' . $Counter;
		
			$Button['Text'] = $_POST[$Prefix . '_Text'];
			$Button['Post_ID'] = $_POST[$Prefix . '_Post_ID'];
			$Button['Custom_Link'] = $_POST[$Prefix . '_Custom_Link'];

			$Buttons[] = $Button; 
			unset($Button);
		}
		$Counter++;
	}
	update_post_meta( $post_id, 'EWD_US_Buttons', $Buttons );

	update_post_meta( $post_id, 'EWD_US_Image_Type', $_POST['use_image'] );
	update_post_meta( $post_id, 'EWD_US_YouTube_URL', $_POST['youtube_url'] );

	if (get_post_meta($post_id, "EWD_US_Slide_Order", true) == "") {update_post_meta($post_id, "EWD_US_Slide_Order", 999);}
}