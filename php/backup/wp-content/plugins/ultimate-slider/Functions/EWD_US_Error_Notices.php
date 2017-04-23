<?php
/* Add any update or error notices to the top of the admin page */
function EWD_US_Error_Notices(){
    global $ewd_us_message;
		if (isset($ewd_us_message)) {
			  if (isset($ewd_us_message['Message_Type']) and $ewd_us_message['Message_Type'] == "Update") {echo "<div class='updated'><p>" . $ewd_us_message['Message'] . "</p></div>";}
				if (isset($ewd_us_message['Message_Type']) and $ewd_us_message['Message_Type'] == "Error") {echo "<div class='error'><p>" . $ewd_us_message['Message'] . "</p></div>";}
		}
}

?>