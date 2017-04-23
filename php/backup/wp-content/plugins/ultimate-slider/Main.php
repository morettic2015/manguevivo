<?php
/*
Plugin Name: Slider Ultimate
Plugin URI: http://www.EtoileWebDesign.com/plugins/
Description: A plugin that lets you create a slider, using posts, WooCommerce or Ultimate Product Catalog products
Author: Etoile Web Design
Author URI: http://www.EtoileWebDesign.com/plugins/
Terms and Conditions: http://www.etoilewebdesign.com/plugin-terms-and-conditions/
Text Domain: EWD_US
Version: 1.0.13
*/

global $ewd_us_message;
global $US_Full_Version;
global $EWD_US_Version;

$EWD_US_Version = '1.0.3';

define( 'EWD_US_CD_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'EWD_US_CD_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

register_activation_hook(__FILE__,'Set_EWD_US_Options');


if ( is_admin() ){
    add_action('admin_head', 'EWD_US_Admin_Options');
    add_action('widgets_init', 'Update_EWD_US_Content');
    add_action('admin_notices', 'EWD_US_Error_Notices');
}

function EWD_US_Admin_Options() {
    wp_enqueue_style( 'ewd-us-admin', plugins_url("ultimate-slider/css/Admin.css"));
    wp_enqueue_style( 'spectrum', plugins_url("ultimate-slider/css/spectrum.css"));
}

function EWD_US_Enable_Sub_Menu() {
    add_submenu_page('edit.php?post_type=ultimate_slider', 'Slider Options', 'Settings', 'edit_posts', 'us-options', 'EWD_US_Output_Options_Page');
}
add_action('admin_menu' , 'EWD_US_Enable_Sub_Menu');


function EWD_US_Make_Posts_Sortable($hook) {
    global $post;
    if ($hook == 'edit.php' or $hook == 'post-new.php' or $hook == 'post.php' or $hook == 'ultimate_slider_page_us-options' or $hook == 'widgets.php') {
        if ($post->post_type == 'ultimate_slider' or $hook == 'ultimate_slider_page_us-options' or $hook == 'widgets.php') {
            wp_enqueue_script(  'jquery-ui-core' );
            wp_enqueue_script(  'jquery-ui-sortable' );
            wp_enqueue_script(  'ultimate-slider-admin', plugins_url('ultimate-slider/js/ultimate-slider-admin.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-sortable'), true);
            wp_enqueue_script(  'spectrum', plugins_url('ultimate-slider/js/spectrum.js'), array('jquery'), true);
        }
    }
}
add_action( 'admin_enqueue_scripts', 'EWD_US_Make_Posts_Sortable', 10, 1 );

add_action( 'wp_enqueue_scripts', 'EWD_US_Add_Stylesheet' );
function EWD_US_Add_Stylesheet() {
    wp_enqueue_style( 'ewd-us-main', plugins_url("ultimate-slider/css/ewd-us-main.css"));
    wp_enqueue_style( 'ewd-ulb-main', plugins_url("ultimate-slider/css/ewd-ulb-main.css"));
}

// Add settings link on plugin page
function EWD_US_plugin_settings_link($links) {
  $settings_link = '<a href="edit.php?post_type=ultimate_slider">Settings</a>';
  array_unshift($links, $settings_link);
  return $links;
}
$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'EWD_US_plugin_settings_link' );

add_action( 'wp_enqueue_scripts', 'Add_EWD_US_FrontEnd_Scripts' );
function Add_EWD_US_FrontEnd_Scripts() {
    wp_register_script( 'ultimate-slider', plugins_url('ultimate-slider/js/ultimate-slider.js'), array('jquery'), true);

    $Autoplay_Slideshow = get_option('EWD_US_Autoplay_Slideshow');
    $Autoplay_Delay = get_option('EWD_US_Autoplay_Delay');
    $Autoplay_Interval = get_option("EWD_US_Autoplay_Interval");
    $Slide_Transition_Effect = get_option("EWD_US_Slide_Transition_Effect");
    $Transition_Time = get_option("EWD_US_Transition_Time");
    $Aspect_Ratio = get_option("EWD_US_Aspect_Ratio");
    $Mobile_Aspect_Ratio = get_option("EWD_US_Mobile_Aspect_Ratio");
    $Carousel = get_option("EWD_US_Carousel");
    $Carousel_Columns = get_option("EWD_US_Carousel_Columns");
    $Carousel_Link_To_Full = get_option("EWD_US_Carousel_Link_To_Full");
    $Carousel_Advance = get_option("EWD_US_Carousel_Advance");
    $Title_Animate = get_option("EWD_US_Title_Animate");
    $Lightbox = get_option("EWD_US_Lightbox");
    $Timer_Bar = get_option("EWD_US_Timer_Bar");

    $Aspect_Fraction = EWD_US_Get_Aspect_Fraction($Aspect_Ratio);
    $Mobile_Aspect_Fraction = EWD_US_Get_Aspect_Fraction($Mobile_Aspect_Ratio);

    $Data_Array = array( 'autoplay_slideshow' => $Autoplay_Slideshow,
                        'autoplay_delay' => $Autoplay_Delay,
                        'autoplay_interval' => $Autoplay_Interval,
                        'slide_transition_effect' => $Slide_Transition_Effect,
                        'transition_time' => $Transition_Time,
                        'aspect_ratio' => $Aspect_Fraction,
                        'mobile_aspect_ratio' => $Mobile_Aspect_Fraction,
                        'slider_carousel' => $Carousel,
                        'carousel_columns' => $Carousel_Columns,
                        'carousel_link_to_full' => $Carousel_Link_To_Full,
                        'carousel_advance' => $Carousel_Advance,
                        'title_animate' => $Title_Animate,
                        'lightbox' => $Lightbox,
                        'timer_bar' => $Timer_Bar
        );
    wp_localize_script( 'ultimate-slider', 'ewd_us_php_data', $Data_Array );

    wp_enqueue_script('ultimate-slider');

    wp_enqueue_script(  'iframe-clicks', plugins_url('ultimate-slider/js/jquery.iframetracker.js'), array('jquery'), true);
    if ($Lightbox == "Yes") {
        wp_enqueue_script(  'ultimate-lightbox', plugins_url('ultimate-slider/js/ultimate-lightbox.js'), array('jquery'), true);
    }
}

function EWD_US_Get_Aspect_Fraction($Aspect_Ratio) {
    if ($Aspect_Ratio == "3_1") {$Aspect_Fraction = .333333333;}
    if ($Aspect_Ratio == "16_7") {$Aspect_Fraction = .444444444;}
    if ($Aspect_Ratio == "2_1") {$Aspect_Fraction = .5;}
    if ($Aspect_Ratio == "16_9") {$Aspect_Fraction = .5625;}
    if ($Aspect_Ratio == "3_2") {$Aspect_Fraction = .666666666;}
    if ($Aspect_Ratio == "4_3") {$Aspect_Fraction = .75;}
    if ($Aspect_Ratio == "1_1") {$Aspect_Fraction = 1;}

    return $Aspect_Fraction;
}

$US_Full_Version = get_option("EWD_US_Full_Version");

if (isset($_GET['post_type']) and $_GET['post_type'] == 'ultimate_slider' and ($US_Full_Version != "Yes" or get_option("EWD_US_Trial_Happening") == "Yes")) {add_action("admin_notices", "EWD_US_Upgrade_Box");}
if (isset($_GET['post_type']) and $_GET['post_type'] == 'ultimate_slider' and isset($_POST['EWD_US_Upgrade_To_Full']) and $US_Full_Version == "Yes") {add_action("admin_notices", "EWD_US_Upgrade_Notice");}

if (isset($_POST['EWD_US_Upgrade_To_Full'])) {
      add_action('admin_init', 'EWD_US_Upgrade_To_Full');
}

$Show_TinyMCE = get_option("EWD_US_Show_TinyMCE");
if ($Show_TinyMCE == "Yes") {
    add_filter( 'mce_buttons', 'EWD_US_Register_TinyMCE_Buttons' );
    add_filter( 'mce_external_plugins', 'EWD_US_Register_TinyMCE_Javascript' );
    add_action('admin_head', 'EWD_US_Output_TinyMCE_Vars');
}

function EWD_US_Register_TinyMCE_Buttons( $buttons ) {
   array_push( $buttons, 'separator', 'US_Shortcodes' );
   return $buttons;
}

function EWD_US_Register_TinyMCE_Javascript( $plugin_array ) {
   $plugin_array['US_Shortcodes'] = plugins_url( '/js/tinymce-plugin.js',__FILE__ );

   return $plugin_array;
}

function EWD_US_Output_TinyMCE_Vars() {
    global $US_Full_Version;

    $Categories = get_terms('ultimate_slider_categories', array('hide_empty' => false));
    if ($Categories) {
        foreach ($Categories as $Category) {
            $Category_Array_Item['Category_Name'] = $Category->name;
            $Category_Array_Item['Category_Slug'] = $Category->slug;

            $Categories_Array[] = $Category_Array_Item;
        }
    }
    $WC_Categories = get_terms('product_cat', array('hide_empty' => false));
    if ($WC_Categories) {
        foreach ($WC_Categories as $Category) {
            $Category_Array_Item['Category_Name'] = $Category->name;
            $Category_Array_Item['Category_Slug'] = $Category->slug;

            $WC_Categories_Array[] = $Category_Array_Item;
        }
    }

    echo "<script type='text/javascript'>";
    echo "var us_premium = '" . $US_Full_Version . "';\n";
    echo "var slider_categories = " . json_encode($Categories_Array) . ";\n";
    echo "var woocommerce_categories = " . json_encode($WC_Categories_Array) . ";\n";
    echo "</script>";
}


include "Functions/EWD_US_Add_Meta_Boxes.php";
include "Functions/EWD_US_Add_Order_Column.php";
include "Functions/EWD_US_Error_Notices.php";
include "Functions/EWD_US_Full_Upgrade.php";
include "Functions/EWD_US_Output_Options_Page.php";
include "Functions/EWD_US_Process_Ajax.php";
include "Functions/EWD_US_Register_Custom_Posttype.php";
include "Functions/EWD_US_Upgrade_Box.php";
include "Functions/EWD_US_Version_Reversion.php";
include "Functions/EWD_US_Widgets.php";
include "Functions/EWD_US_WooCommerce.php";
include "Functions/Update_EWD_US_Admin_Databases.php";
include "Functions/Update_EWD_US_Content.php";
include "Functions/EWD_US_Styling.php";
include "Functions/EWD_US_Add_Views_Column.php";

include "Shortcodes/Display_Slider.php";

if (get_option('EWD_US_Version') != $EWD_US_Version) {
    Set_EWD_US_Options();
}

function Set_EWD_US_Options() {
    global $US_Full_Version;
    global $EWD_US_Version;

    if (get_option("EWD_US_Autoplay_Slideshow") == "") {update_option("EWD_US_Autoplay_Slideshow", "Yes");}
    if (get_option("EWD_US_Autoplay_Delay") == "") {update_option("EWD_US_Autoplay_Delay", 6);}
    if (get_option("EWD_US_Autoplay_Interval") == "") {update_option("EWD_US_Autoplay_Interval", 4);}
    if (get_option("EWD_US_Transition_Time") == "") {update_option("EWD_US_Transition_Time", 1);}
    if (get_option("EWD_US_Aspect_Ratio") == "") {update_option("EWD_US_Aspect_Ratio", "16_7");}
    if (get_option("EWD_US_Carousel") == "") {update_option("EWD_US_Carousel", "No");}
    if (get_option("EWD_US_Carousel_Columns") == "") {update_option("EWD_US_Carousel_Columns", "3");}
    if (get_option("EWD_US_Carousel_Link_To_Full") == "") {update_option("EWD_US_Carousel_Link_To_Full", "Yes");}
    if (get_option("EWD_US_Carousel_Advance") == "") {update_option("EWD_US_Carousel_Advance", "Full");}
    if (get_option("EWD_US_Show_TinyMCE") == "") {update_option("EWD_US_Show_TinyMCE", "Yes");}
    if (get_option("EWD_US_Timer_Bar") == "") {update_option("EWD_US_Timer_Bar", "Top");}
    if (get_option("EWD_US_Slide_Indicators") == "") {update_option("EWD_US_Slide_Indicators", "Dots");}
    if (get_option("EWD_US_Link_Action") == "") {update_option("EWD_US_Link_Action", "Same");}
    if (get_option("EWD_US_Slide_Transition_Effect") == "") {update_option("EWD_US_Slide_Transition_Effect", "slide");}
    if (get_option("EWD_US_WC_Product_Image_Slider") == "") {update_option("EWD_US_WC_Product_Image_Slider", "No");}
    if (get_option("EWD_US_Mobile_Aspect_Ratio") == "") {update_option("EWD_US_Mobile_Aspect_Ratio", get_option("EWD_US_Aspect_Ratio"));}
    if (get_option("EWD_US_Hide_On_Mobile") == "") {update_option("EWD_US_Hide_On_Mobile", array('body', 'buttons'));}
    if (get_option("EWD_US_Mobile_Link_To_Full") == "") {update_option("EWD_US_Mobile_Link_To_Full", "No");}
    if (get_option("EWD_US_Add_Watermark") == "") {update_option("EWD_US_Add_Watermark", "No");}
    if (get_option("EWD_US_Title_Animate") == "") {update_option("EWD_US_Title_Animate", "None");}
    if (get_option("EWD_US_Lightbox") == "") {update_option("EWD_US_Lightbox", "No");}
    if (get_option("EWD_US_Full_Version") == "") {update_option("EWD_US_Full_Version", "No");}

    if (get_option("EWD_us_Arrow") == "") {update_option("EWD_us_Arrow", "a");}
    if (get_option("EWD_us_Arrow_Background_Shape") == "") {update_option("EWD_us_Arrow_Background_Shape", "None");}
    if (get_option("EWD_us_Arrow_Line_Height") == "") {update_option("EWD_us_Arrow_Line_Height", "1.25");}

    update_option("EWD_US_Version", $EWD_US_Version);
}
