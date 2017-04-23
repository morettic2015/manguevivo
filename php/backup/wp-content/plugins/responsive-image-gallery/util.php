<?php
class Utility{
	function pageScript($obj, $page = null, $function = '', $script = true){
		if($page==null){
			echo "Error occured: Please provide the wordpress page object";	
		}else{
			if($function == ''){
				echo "Error occured: Please provide the function name";
			}else{
				($script)?
				add_action('admin_print_scripts-'.$page, array($obj, $function)) :
				add_action('admin_print_styles-'.$page, array($obj, $function)) ;
			}
		}
	}
}
