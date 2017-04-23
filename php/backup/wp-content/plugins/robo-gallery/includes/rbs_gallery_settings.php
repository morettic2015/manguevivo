<?php 
/*
*      Robo Gallery     
*      Version: 1.2
*      By Robosoft
*
*      Contact: http://robosoft.co
*      Created: 2015
*      Licensed under the GPLv2 license - http://opensource.org/licenses/gpl-2.0.php
*
*      Copyright (c) 2014-2016, Robosoft. All rights reserved.
*      Available only in  http://robosoft.co/robogallery
*/
if ( ! defined( 'ABSPATH' ) ) exit;

wp_enqueue_style ( 	'robosoft-gallery-about', ROBO_GALLERY_URL.'css/admin/about.css', array( ), ROBO_GALLERY_VERSION );
?>
<div class="wrap">
	<h2><?php _e('Compatibility Settings', 'rbs_gallery'); ?></h2>

	<form method="post" action="options.php" novalidate="novalidate">
		<?php 
		settings_fields( 'rbs_gallery_settings' ); 
		do_settings_sections( 'rbs_gallery_settings' ); 
		 ?>
		<table class="form-table">
			
			<tr>
				<th scope="row"><?php _e('Categories Manager', 'rbs_gallery'); ?></th>
				<td>
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e('Show', 'rbs_gallery'); ?></span></legend>
						<label title='<?php _e('Show', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'categoryShow'; ?>' value='0' <?php if( !get_option(ROBO_GALLERY_PREFIX.'categoryShow', '') ) echo " checked='checked'"; ?> /> <?php _e('Show'); ?>
						</label><br />
						<label title='<?php _e('Hide', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'categoryShow'; ?>' value='1' <?php if( get_option(ROBO_GALLERY_PREFIX.'categoryShow')==1 ) echo " checked='checked'"; ?>  /> <?php _e('Hide'); ?>
						</label><br />			
					</fieldset>
				</td>
			</tr>
			<tr>
				<th scope="row"><?php _e('jQuery Version', 'rbs_gallery'); ?></th>
				<td>
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e('jQuery Version', 'rbs_gallery'); ?></span></legend>
						<label title='<?php _e('Default', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'jqueryVersion'; ?>' value='build' <?php if( get_option(ROBO_GALLERY_PREFIX.'jqueryVersion', 'build')=='build' ) echo " checked='checked'";?> /> <?php _e('Default', 'rbs_gallery'); ?>
						</label><br />
						<label title='<?php _e('Alternative', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'jqueryVersion'; ?>' value='robo' <?php if( get_option(ROBO_GALLERY_PREFIX.'jqueryVersion')=='robo' ) echo " checked='checked'";?>  /> <?php _e('Alternative', 'rbs_gallery'); ?>
						</label>
						<p class="description">[for the case if you have jQuery version conflicts on page]</p>
						<br />
						<label title='<?php _e('Forced include', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'jqueryVersion'; ?>' value='forced' <?php if( get_option(ROBO_GALLERY_PREFIX.'jqueryVersion')=='forced' ) echo " checked='checked'";?>  /> <?php _e('Forced include', 'rbs_gallery'); ?>
						</label>
						<p class="description">[ for the case when Your theme do not use Wordpress API ]</p>
					</fieldset>
				</td>
			</tr>
			<tr>
				<th scope="row"><?php _e('Font Awesome', 'rbs_gallery'); ?></th>
				<td>
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e('Font Awesome', 'rbs_gallery'); ?></span></legend>
						<label title='<?php _e('Load', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'fontLoad'; ?>' value='on' <?php if( get_option(ROBO_GALLERY_PREFIX.'fontLoad', 'on')=='on' ) echo " checked='checked'";?> /> <?php _e('Load', 'rbs_gallery'); ?>
						</label><br />
						<label title='<?php _e('Don\'t load', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'fontLoad'; ?>' value='off' <?php if( get_option(ROBO_GALLERY_PREFIX.'fontLoad')=='off' ) echo " checked='checked'";?>  /> <?php _e('Don\'t load', 'rbs_gallery'); ?>
						</label>
						<p class="description">[ <?php _e('for the case if Your theme already have awesome fonts loaded', 'rbs_gallery'); ?>' ]</p>
					</fieldset>
				</td>
			</tr>
			<tr>
				<th scope="row"><?php _e('Switch Style', 'rbs_gallery'); ?></th>
				<td>
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e('Switch Style', 'rbs_gallery'); ?></span></legend>
						<label title='<?php _e('Modern', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'switchStyle'; ?>' value='0' <?php if( !get_option(ROBO_GALLERY_PREFIX.'switchStyle', '') ) echo " checked='checked'";?> /> <?php _e('Modern', 'rbs_gallery'); ?>
						</label><br />
						<label title='<?php _e('Classic', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'switchStyle'; ?>' value='1' <?php if( get_option(ROBO_GALLERY_PREFIX.'switchStyle')=='1' ) echo " checked='checked'";?>  /> <?php _e('Classic', 'rbs_gallery'); ?>
						</label><br />			
					</fieldset>
				</td>
			</tr>
			<tr>
				<th scope="row"><?php _e('Size Calculations Delay', 'rbs_gallery'); ?></th>
				<td>
					<input name="<?php echo ROBO_GALLERY_PREFIX.'delay'; ?>" id="<?php echo ROBO_GALLERY_PREFIX.'delay'; ?>" value="<?php echo (int) get_option(ROBO_GALLERY_PREFIX.'delay', '1000'); ?>" class="small-text" type="text"> ms.
				</td>
			</tr>
			<tr>
				<th scope="row"><?php _e('Debug', 'rbs_gallery'); ?></th>
				<td>
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e('Enable', 'rbs_gallery'); ?></span></legend>
						<label title='<?php _e('Enable', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'debugEnable'; ?>' value='1' <?php if( get_option(ROBO_GALLERY_PREFIX.'debugEnable')==1 ) echo " checked='checked'"; ?> /> <?php _e('Enable'); ?>
						</label><br />
						<label title='<?php _e('Disable', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'debugEnable'; ?>' value='0' <?php if( !get_option(ROBO_GALLERY_PREFIX.'debugEnable', '') ) echo " checked='checked'"; ?>  /> <?php _e('Disable'); ?>
						</label><br />			
					</fieldset>
				</td>
			</tr>

			<tr>
				<th scope="row"><?php _e('Express panel', 'rbs_gallery'); ?></th>
				<td>
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e('Enable', 'rbs_gallery'); ?></span></legend>
						<label title='<?php _e('Enable', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'expressPanel'; ?>' value='1' <?php if( get_option(ROBO_GALLERY_PREFIX.'expressPanel')==1 ) echo " checked='checked'"; ?> /> <?php _e('Enable'); ?>
						</label><br />
						<label title='<?php _e('Disable', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'expressPanel'; ?>' value='0' <?php if( !get_option(ROBO_GALLERY_PREFIX.'expressPanel', '') ) echo " checked='checked'"; ?>  /> <?php _e('Disable'); ?>
						</label><br />			
					</fieldset>
				</td>
			</tr>

			<tr>
				<th colspan="2"><h2><?php _e('Create Post Settings', 'rbs_gallery'); ?></h2></th>
			</tr>
			<tr>
				<th scope="row"><?php _e('Text Block', 'rbs_gallery'); ?></th>
				<td>
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e('Show Text', 'rbs_gallery'); ?></span></legend>
						<label title='<?php _e('Show', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'postShowText'; ?>' value='0' <?php if( !get_option(ROBO_GALLERY_PREFIX.'postShowText', '') ) echo " checked='checked'"; ?> /> <?php _e('Show', 'rbs_gallery'); ?>
						</label><br />
						<label title='<?php _e('Hide', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'postShowText'; ?>' value='1' <?php if( get_option(ROBO_GALLERY_PREFIX.'postShowText')=='1' ) echo " checked='checked'"; ?>  /> <?php _e('Hide', 'rbs_gallery'); ?>
						</label><br />			
					</fieldset>
				</td>
			</tr>

			<tr>
				<th scope="row"><?php _e('Clone Block', 'rbs_gallery'); ?></th>
				<td>
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e('Show Clone Block', 'rbs_gallery'); ?></span></legend>
						<label title='<?php _e('Show', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'cloneBlock'; ?>' value='0' <?php if( !get_option(ROBO_GALLERY_PREFIX.'cloneBlock', '') ) echo " checked='checked'"; ?> /> <?php _e('Show', 'rbs_gallery'); ?>
						</label><br />
						<label title='<?php _e('Hide', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'cloneBlock'; ?>' value='1' <?php if( get_option(ROBO_GALLERY_PREFIX.'cloneBlock')=='1' ) echo " checked='checked'"; ?>  /> <?php _e('Hide', 'rbs_gallery'); ?>
						</label><br />			
					</fieldset>
				</td>
			</tr>

			<tr>
				<th colspan="2"><h2><?php _e('SEO Optimization', 'rbs_gallery'); ?></h2></th>
			</tr>
			<tr>
				<th scope="row"><?php _e('Add SEO content', 'rbs_gallery'); ?></th>
				<td>
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e('Enable [thumbs]', 'rbs_gallery'); ?></span></legend>
						<label title='<?php _e('Enable [thumbs]', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'seo'; ?>' value='2' <?php if( get_option(ROBO_GALLERY_PREFIX.'seo')=='2' ) echo " checked='checked'"; ?> /> <?php _e('Enable [thumbs]', 'rbs_gallery'); ?>
						</label><br />

						<legend class="screen-reader-text"><span><?php _e('Enable [thumbs + link]', 'rbs_gallery'); ?></span></legend>
						<label title='<?php _e('Enable [thumbs + link]', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'seo'; ?>' value='1' <?php if( get_option(ROBO_GALLERY_PREFIX.'seo')=='1' ) echo " checked='checked'"; ?> /> <?php _e('Enable [thumbs + link]', 'rbs_gallery'); ?>
						</label><br />

						<label title='<?php _e('Disable', 'rbs_gallery'); ?>'>
							<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'seo'; ?>' value='0' <?php if( !get_option(ROBO_GALLERY_PREFIX.'seo', '') ) echo " checked='checked'"; ?>  /> <?php _e('Disable', 'rbs_gallery'); ?>
						</label><br />			
					</fieldset>
				</td>
			</tr>

		</table>

		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', 'rbs_gallery'); ?>"  />
		</p>

	</form>
</div>
<div class="rbs_about_string2">Copyright &copy; 2014 - 2017 <a href="http://robosoft.co/robogallery">RoboSoft</a> All Rights Reserved</div>
