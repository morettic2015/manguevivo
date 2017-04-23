<?php

function Update_EWD_US_Content() {
	global $ewd_us_message;
if (isset($_GET['Action'])) {
		switch ($_GET['Action']) {
			case "EWD_US_UpdateOptions":
       			$ewd_us_message = EWD_US_UpdateOptions();
				break;
			default:
				$ewd_us_message = __("The form has not worked correctly. Please contact the plugin developer.", 'EWD_US');
				break;
		}
	}
}

?>