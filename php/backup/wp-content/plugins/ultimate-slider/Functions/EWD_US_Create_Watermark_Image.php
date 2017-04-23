<?php
function EWD_US_Create_Watermark_Image() {
	require_once(substr($_SERVER['SCRIPT_FILENAME'], 0, strpos($_SERVER['SCRIPT_FILENAME'], "/wp-content/")) . '/wp-load.php');
	
	$upload_dir = wp_upload_dir();
	$plugin_upload_path = $upload_dir['basedir'] . "/ultimate-slider/";
	$Image_File_Path = $plugin_upload_path . basename($_GET['Image_URL']);

	$Aspect_Ratio = get_option("EWD_US_Aspect_Ratio");
	if ($Aspect_Ratio == "3_1") {$Aspect_Fraction = .333333333;}
    elseif ($Aspect_Ratio == "2_1") {$Aspect_Fraction = .5;}
    elseif ($Aspect_Ratio == "16_9") {$Aspect_Fraction = .5625;}
    elseif ($Aspect_Ratio == "3_2") {$Aspect_Fraction = .666666666;}
    elseif ($Aspect_Ratio == "4_3") {$Aspect_Fraction = .75;}
    elseif ($Aspect_Ratio == "1_1") {$Aspect_Fraction = 1;}
    else {$Aspect_Fraction = .444444444;}

	$Image_String = file_get_contents($_GET['Image_URL']);

	$stamp = imagecreatefrompng(plugins_url('ultimate-slider/img/star-watermark.png'));
	$im = imagecreatefromstring($Image_String);

	$Height = imagesy($im);
	$Width = imagesx($im);

	if ($Width < 2500) {
		$Stamp_Width = round($Width/10);
		$Stamp_Height = $Stamp_Width;
		$Scaled_Stamp = imagescale($stamp, $Stamp_Width, $Stamp_Height);
	}
	else {
		$Scaled_Stamp = $stamp;
	}

	$marge_right = 10;
	$marge_bottom = $Height - ($Width * $Aspect_Fraction) + 10;
	$sx = imagesx($Scaled_Stamp);
	$sy = imagesy($Scaled_Stamp);
	 
	imagecopy($im, $Scaled_Stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($Scaled_Stamp), imagesy($Scaled_Stamp));
	
	header('Content-type: image/png');
	imagepng($im, $Image_File_Path);
	imagedestroy($im);
}

EWD_US_Create_Watermark_Image();
?>