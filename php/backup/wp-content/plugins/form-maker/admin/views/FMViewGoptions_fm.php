<?php
class FMViewGoptions_fm {
	////////////////////////////////////////////////////////////////////////////////////////
	// Events                                                                             //
	////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	// Constants                                                                          //
	////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	// Variables                                                                          //
	////////////////////////////////////////////////////////////////////////////////////////
	private $model;

	////////////////////////////////////////////////////////////////////////////////////////
	// Constructor & Destructor                                                           //
	////////////////////////////////////////////////////////////////////////////////////////
	public function __construct($model) {
	$this->model = $model;
	}

  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////
	public function display() {
		$fm_settings = get_option('fm_settings');
		$public_key = isset($fm_settings['public_key']) ? $fm_settings['public_key'] : '';
		$private_key = isset($fm_settings['private_key']) ? $fm_settings['private_key'] : '';
		$csv_delimiter = isset($fm_settings['csv_delimiter']) ? $fm_settings['csv_delimiter'] : ',';
		$fm_shortcode = isset($fm_settings['fm_shortcode']) ? $fm_settings['fm_shortcode'] : '';
		$map_key = isset($fm_settings['map_key']) ? $fm_settings['map_key'] : '';
		?>
		<div class="fm-user-manual">
			This section allows you to edit form settings.
			<a style="color: blue; text-decoration: none;" target="_blank" href="https://web-dorado.com/wordpress-form-maker-guide-2.html">Read More in User Manual</a>
		</div>
		<div class="fm-clear"></div>
		<form class="wrap" method="post" action="admin.php?page=goptions_fm" style="width:99%;">
			<?php wp_nonce_field('nonce_fm', 'nonce_fm'); ?>     
			<div class="fm-page-header">
				<div class="fm-page-title">
					Form Settings
				</div>
				<div class="fm-page-actions">
					<button class="fm-button save-button small" onclick="if (fm_check_required('title', 'Title')) {return false;}; fm_set_input_value('task', 'save');">
						<span></span>
						Save
					</button>
				</div>
			</div>

			<table style="clear:both;">
				<tbody>
					<tr>
						<td>
							<label for="public_key">Recaptcha Public Key:</label>
						</td>
						<td>
							<input type="text" id="public_key" name="public_key" value="<?php echo $public_key; ?>" style="width:250px;" />
						</td>
						<td rowspan="2">
							<a href="https://www.google.com/recaptcha/intro/index.html" target="_blank">Get Recaptcha</a>
						</td>
					</tr>
					<tr>
						<td>
							<label for="private_key">Recaptcha Private Key:</label>
						</td>
						<td>
							<input type="text" id="private_key" name="private_key" value="<?php echo $private_key; ?>" style="width:250px;" />
						</td>
					</tr>
					<tr>
						<td>
							<label for="public_key">Map API Key:</label>
						</td>
						<td>
							<input type="text" id="map_key" name="map_key" value="<?php echo $map_key; ?>" style="width:250px;" />
						</td>
						<td>
							<a href="https://console.developers.google.com/flows/enableapi?apiid=maps_backend&keyType=CLIENT_SIDE&reusekey=true" target="_blank">Get map API key</a>
						</td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td>
							<span style="width:250px; display: inline-block; padding: 0 5px;">(It may take up to 5 minutes for API key change to take effect.)</span>
						</td>
						<td>
							
						</td>
					</tr>
					<tr>
						<td>
							<label for="csv_delimiter">CSV Delimiter:</label>
						</td>
						<td>
							<input type="text" id="csv_delimiter" name="csv_delimiter" value="<?php echo $csv_delimiter; ?>" style="width:50px;" />
						</td>
					</tr>
					<tr>
						<td style="vertical-align: top; width: 200px;">
							<label for="fm_shortcode">Use alternative version of JS code on front-end:</label>
						</td>
						<td style="padding: 6px 0 0 3px">
							<input style="vertical-align:top;" type="checkbox" id="fm_shortcode" name="fm_shortcode" <?php if($fm_shortcode) echo "checked ='checked'" ?>/>
							<div style="width:250px; display: inline-block; padding: 0 5px; color:red">Check this box only if you are getting JavaScript errors while trying to submit the form.</div>
						</td>
					</tr>
				</tbody>
			</table>
			<input type="hidden" id="task" name="task" value=""/>
		</form>
		<?php
	}



	////////////////////////////////////////////////////////////////////////////////////////
	// Getters & Setters                                                                  //
	////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	// Private Methods                                                                    //
	////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	// Listeners                                                                          //
	////////////////////////////////////////////////////////////////////////////////////////
}