<?php

function EWD_US_Upgrade_Box() {
?>






<!-- Upgrade to pro link box -->
<div id="ewd-us-dashboard-top-upgrade">
	<div id="ewd-us-dashboard-top-upgrade-left">
		<div id="ewd-dashboard-pro" class="postbox upcp-pro upcp-postbox-collapsible" >
			<div class="handlediv" title="Click to toggle"></div><h3 class='hndle ewd-dashboard-h3'><span><?php _e("UPGRADE TO FULL VERSION", 'EWD_US') ?></span></h3>
			<div class="inside">
				<h3><?php _e("What you get by upgrading:", 'EWD_US') ?></h3>
				<div class="clear"></div>
				<ul>
					<li><span>Lightbox integration - let visitors zoom in on images and create a scrolling gallery.</span></li>
					<li><span>Choose from numerous transition and title effects!</span></li>
					<li><span>Watermarks to protect your images, dozens of styling and control options and much more!</span></li>
					<li><span>Access to e-mail support.</span></li>
				</ul>
				<div class="clear"></div>
				<a class="purchaseButton" href="http://www.etoilewebdesign.com/plugins/ultimate-slider/" target="_blank">
					Click here to purchase the full version
				</a>
				<div class="clear"></div>
				<div class="full-version-form-div">
					<form action="edit.php?post_type=ultimate_slider" method="post">
						<div class="form-field form-required">
							<!-- <label for="Catalogue_Name"><?php _e("Product Key", 'EWD_US') ?></label> -->
							<input name="Key" type="text" value="" size="40" placeholder="<?php _e('Enter product key or free trial code here', 'EWD_US'); ?>" />
						</div>
						<input type="submit" name="EWD_US_Upgrade_To_Full" value="<?php _e('UPGRADE', 'EWD_US'); ?>">
					</form>
				</div>
			</div>
		</div>
	</div> <!-- ewd-us-dashboard-top-upgrade-left -->
	<?php if (get_option("EWD_US_Trial_Happening") != "No") { ?>
		<div id="ewd-us-dashboard-top-upgrade-right">
			<div id="ewd-dashboard-pro" class="postbox upcp-pro upcp-postbox-collapsible" >
				<div class="handlediv" title="Click to expand"></div>
				<h3 class="hndle ewd-dashboard-h3">&nbsp;</h3>
				<div class="inside">
					<div class="topPart">
						<?php
						if(!get_option("EWD_US_Trial_Happening")){
							_e("Want to try out the premium features first?", 'EWD_US');
						}
						else{
							_e("Your free trial is currently active", 'EWD_US');
						}
						?>
					</div>
					<div class="clear"></div>
					<div class="bottomPart">
						<?php if(!get_option("EWD_US_Trial_Happening")){ ?>
							Use code<br /><span class="freeTrialText">&nbsp;EWD Trial&nbsp;</span><br />for a free 7-day trial!
						<?php }
						else{ ?>
							Your trial expires at <span class="freeTrialText"><?php echo date("Y-m-d H:i:s", get_option("EWD_US_Trial_Expiry_Time")); ?> GMT</span>. <a href="http://www.etoilewebdesign.com/plugins/ultimate-slider/" class="freeTrialPurchaseLink" target="_blank">Upgrade here</a> before then to retain any premium changes made!
						<?php } ?>
					</div> <!-- bottomPart -->
				</div> <!-- inside -->
			</div> <!-- postbox -->
		</div> <!-- ewd-us-dashboard-top-upgrade-right -->
	 <?php } ?>
</div> <!-- ewd-us-dashboard-top-upgrade -->

<script>
jQuery(document).ready(function() {
	<?php echo 'var slider_news = "' . EWD_US_Get_EWD_Blog() . '";'; ?>
	jQuery('.tablenav.bottom').append('<div class="ewd-us-news">' + slider_news + '</div>');
});
</script>

<?php
}

function EWD_US_Upgrade_Notice() {
?>
	<div id="side-sortables" class="metabox-holder ">
	<div id="upcp_pro" class="postbox " >
		<div class="handlediv" title="Click to toggle"></div><h3 class='hndle'><span><?php _e("Upgrade Complete!", 'EWD_US') ?></span></h3>
		<div class="inside">
			<ul><li><?php _E("Thanks for upgrading!", 'EWD_US'); ?></li></ul>
		</div>
	</div>
	</div>

<?php
}

function EWD_US_Get_EWD_Blog() {
	$Blog_URL = EWD_US_CD_PLUGIN_PATH . 'Blog.html';
	$Blog = file_get_contents($Blog_URL);

	return $Blog;
}
?>