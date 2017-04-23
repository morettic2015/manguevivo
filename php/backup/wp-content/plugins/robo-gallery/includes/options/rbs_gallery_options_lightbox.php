<?php
/*
*      Robo Gallery     
*      Version: 1.0
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

$lightbox_group = new_cmb2_box( array(
    'id' 			=> ROBO_GALLERY_PREFIX . 'lightbox_metabox',
    'title' 		=> '<span class="dashicons  dashicons-money"></span> '.__( 'Lightbox Options', 'rbs_gallery' ),
    'object_types' 	=> array( ROBO_GALLERY_TYPE_POST ),
    'show_names' 	=> false,
    'context' 		=> 'normal',
));




$lightbox_group->add_field( array(
	'name' 			=> __('Text', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'lightboxTitle',
	'type' 			=> 'switch', 
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(1),
	'bootstrap_style'=> 1,
	'showhide'		=> 1,
	'depends' 		=> 	'.rbs_lightbox_source',
	'before_row' 	=> '
<div class="rbs_block"><br/>',

));

$lightbox_group->add_field( array(
	'name'             => __('Text Source', 'rbs_gallery' ),
	'id'               => ROBO_GALLERY_PREFIX . 'lightboxSource',
	'type'             => 'rbsselect',
	'show_option_none' => false,
	'default'          => 'title',
	'options'          => array(
		'title' 	=> __( 'Title' , 	'rbs_gallery' ),
		'desc' 		=> __( 'Description' , 	'rbs_gallery' ),
		'caption' 	=> __( 'Caption' , 	'rbs_gallery' ),
	),
	'before_row' 	=> '<div class="rbs_lightbox_source">',
	'after_row'		=> '</div> '
));


$lightbox_group->add_field( array(
    'name'    		=> __( 'Text Color', 'rbs_gallery' ),
    'id'   			=> ROBO_GALLERY_PREFIX.'lightboxColor',
    'type' 			=> 'rbstext',
    'class'			=> 'form-control rbs_color',
    'data-default' 	=>  '#F3F3F3',
	'data-alpha'    => 'true',
    'small'			=> 1,
    'default'  		=> '#F3F3F3',
));

$lightbox_group->add_field( array(
    'name'    		=> __( 'Bg Color', 'rbs_gallery' ),
    'id'   			=> ROBO_GALLERY_PREFIX.'lightboxBackground',
    'type' 			=> 'rbstext',
    'class'			=> 'form-control rbs_color',
    'data-default' 	=>  'rgba(11, 11, 11, 0.8)',
	'data-alpha'    => 'true',
	'level'			=> !ROBO_GALLERY_PRO,
    'small'			=> 1,
    'default'  		=> 'rgba(11, 11, 11, 0.8)',
   
));

$lightbox_group->add_field( array(
	'name' 			=> __('Deep Linking', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'deepLinking',
	'type' 			=> 'switch', 
	'desc'			=> __('This option enable linking for every particular image ', 'rbs_gallery' ),
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(0),
	'bootstrap_style'=> 1,
));

$lightbox_group->add_field( array(
	'name' 			=> __(' Images Counter', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'lightboxCounter',
	'type' 			=> 'switch', 
	'showhide'		=> 1,
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(1),
	'bootstrap_style'=> 1,
	'depends' 		=> 	'.rbs_lightbox_counter_text',
	'after_row'		=> '
		<div class="rbs_lightbox_counter_text">',
));

$lightbox_group->add_field( array(
    'name'    => __('Counter Divider','rbs_gallery'),
    'default' => ' of ',
    'id'	  => ROBO_GALLERY_PREFIX .'lightboxCounterText',
    'type'    => 'rbstext',
    'small'			=> 1,
    'after_row'		=> '
		</div>',
));

$lightbox_group->add_field( array(
	'name' 			=> __('Close Icon', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'lightboxClose',
	'type' 			=> 'switch', 
	'showhide'		=> 1,
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(1),
	'bootstrap_style'=> 1,
));

$lightbox_group->add_field( array(
	'name' 			=> __('Arrow Icon', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'lightboxArrow',
	'type' 			=> 'switch', 
	'showhide'		=> 1,
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(1),
	'bootstrap_style'=> 1,
));

$lightbox_group->add_field( array(
	'name' 			=> __('Swipe', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'lightboxSwipe',
	'type' 			=> 'switch', 
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(1),
	'bootstrap_style'=> 1,
));

$lightbox_group->add_field( array(
	'name' 			=> __('Mobile Style', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'lightboxMobile',
	'type' 			=> 'switch', 
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(0),
	'bootstrap_style'=> 1
));

$lightbox_group->add_field( array(
	'name' 			=> __('Source Button ', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'lightboxSourceButton',
	'type' 			=> 'switch', 
	'showhide'		=> 1,
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(0),
	'bootstrap_style'=> 1,
));

$lightbox_group->add_field( array(
	'name' 			=> __('Description Panel', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'lightboxDescPanel',
	'type' 			=> 'switch', 
	'showhide'		=> 1,
	'depends' 		=> 	'.rbs_lightbox_desc_panel',
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(0),
	'bootstrap_style'=> 1,
));

$lightbox_group->add_field( array(
	'name'             => __('Description Source', 'rbs_gallery' ),
	'id'               => ROBO_GALLERY_PREFIX . 'lightboxDescSource',
	'type'             => 'rbsselect',
	'show_option_none' => false,
	'default'          => 'title',
	'options'          => array(
		'title' 	=> __( 'Title' , 	'rbs_gallery' ),
		'desc' 		=> __( 'Description' , 	'rbs_gallery' ),
		'caption' 	=> __( 'Caption' , 	'rbs_gallery' ),
	),
	'before_row'	=> '<div class="rbs_lightbox_desc_panel">',
));

$lightbox_group->add_field( array(
	'name'             => __('Description Style', 'rbs_gallery' ),
	'id'               => ROBO_GALLERY_PREFIX . 'lightboxDescClass',
	'type'             => 'rbsselect',
	'show_option_none' => false,
	'default'          => 'Light',
	'options'          => array(
		'light' 	=> __( 'Light' , 	'rbs_gallery' ),
		'dark' 		=> __( 'Dark' , 	'rbs_gallery' ),
		'red' 		=> __( 'Red' , 	'rbs_gallery' ),
		'blue' 		=> __( 'Blue' , 	'rbs_gallery' ),
		'green' 	=> __( 'Green' , 	'rbs_gallery' ),
		'pink' 		=> __( 'Pink' , 	'rbs_gallery' ),
	),
	'after_row'		=> '</div>',
));

$lightbox_group->add_field( array(
	'name' 			=> __('Social Buttons', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'lightboxSocial',
	'type' 			=> 'switch', 
	'showhide'		=> 1,
	'depends' 		=> 	'.rbs_lightbox_social_button',
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(0),
	'bootstrap_style'=> 1,
	'level'			=> !ROBO_GALLERY_PRO,
     'after_row'		=> '
	<div class="rbs_lightbox_social_button">'
));

$lightbox_group->add_field( array(
	'name' 			=> __('Facebook', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'lightboxSocialFacebook',
	'type' 			=> 'switch', 
	'showhide'		=> 1,
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(1),
     'after_row'		=> ''
));

$lightbox_group->add_field( array(
	'name' 			=> __('Twitter', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'lightboxSocialTwitter',
	'type' 			=> 'switch', 
	'showhide'		=> 1,
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(1),
     'after_row'		=> ''
));

$lightbox_group->add_field( array(
	'name' 			=> __('Google+', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'lightboxSocialGoogleplus',
	'type' 			=> 'switch', 
	'showhide'		=> 1,
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(1),
     'after_row'		=> ''
));

$lightbox_group->add_field( array(
	'name' 			=> __('Pinterest', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'lightboxSocialPinterest',
	'type' 			=> 'switch', 
	'showhide'		=> 1,
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(1),
     'after_row'		=> ''
));

$lightbox_group->add_field( array(
	'name' 			=> __('VK', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'lightboxSocialVK',
	'type' 			=> 'switch', 
	'showhide'		=> 1,
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(1),
     'after_row'		=> '
	</div>
</div> '
));
	