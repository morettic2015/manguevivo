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

$button_group = new_cmb2_box( array(
    'id' 			=> ROBO_GALLERY_PREFIX . 'button_metabox',
    'title' 		=> '<span class="dashicons dashicons-format-gallery"></span> '.__( 'Menu Options', 'rbs_gallery' ),
    'object_types' 	=> array( ROBO_GALLERY_TYPE_POST ),
    'show_names' 	=> false,
    'context' 		=> 'normal',
));

$button_group->add_field( array(
	'name' 			=> __('Menu', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'menu',
	'type' 			=> 'switch',
	'level'			=> !ROBO_GALLERY_PRO,
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(1),
	'bootstrap_style'=> 1,
	'showhide'		=> 1,
	'depends' 		=> 	'.rbs_menu_options',
	'before_row'	=> '
	<a id="rbs_menu_options_link"></a>
<div class="rbs_block"><br/>',
	'after_row'		=> '
	<div class="rbs_menu_options">',
));

$button_group->add_field( array(
	'name' 			=> __('Menu mode', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'menuTag',
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(0),
	'type' 			=> 'switch',
	'level'			   => !ROBO_GALLERY_PRO,
	'update'		=> '1.4',
	
	'depends' 		=> 	'.menuTagOptions',

	'onText'		=> __('Tags', 'rbs_gallery' ),
	'offText'		=> __('Categories', 'rbs_gallery' ),
	'onStyle'		=> __('primary', 'rbs_gallery' ),
	'offStyle'		=> __('info', 'rbs_gallery' ),
	'bootstrap_style'=> 1,
	'after_row'		=> '
	<div class="menuTagOptions">'
));

$button_group->add_field( array(
	'name'             => __('Tags Ordering', 'rbs_gallery' ),
	'id'               => ROBO_GALLERY_PREFIX . 'menuTagSort',
	'type'             => 'rbsradiobutton',
	'show_option_none' => false,
	'update'		=> '1.5',
	'default'          => '',
	'options'          => array(
		'' 		=> __( 'No ordering' , 		'rbs_gallery' ),
		'asc' 	=> __( 'Alphabetical asc' , 'rbs_gallery' ),
		'desc' 	=> __( 'Alphabetical desc' ,'rbs_gallery' ),
	),
	'after_row'		=> '
	</div>',
));

$button_group->add_field( array(
	'name' 			=> __('Self Images', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'menuSelfImages',
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(1),
	'type' 			=> 'switch',
	'showhide'		=> 1,
	'bootstrap_style'=> 1,
));




$button_group->add_field( array(
	'name' 			=> __('Root Label', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'menuRoot',
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(1),
	'type' 			=> 'switch',
	'bootstrap_style'=> 1,
	'depends' 		=> 	'.rbs_menu_root_text',
	'showhide'		=> 1,
	'before_row'	=>'
	<div role="tabpanel">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#menu_label" aria-controls="menu_label" role="tab" data-toggle="tab">'.__('Menu Labels', 'rbs_gallery' ).'</a></li>
				<li role="presentation"><a href="#menu_render" aria-controls="menu_render" role="tab" data-toggle="tab">'.__('Menu Style', 'rbs_gallery' ).'</a></li>
				<li role="presentation"><a href="#menu_search" aria-controls="menu_search" role="tab" data-toggle="tab">'.__('Search', 'rbs_gallery' ).'</a></li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="menu_label"><br/>',
	'after_row'		=>'
					<div class="rbs_menu_root_text">',
));

$button_group->add_field( array(
    'name'    => __('Root Label Text','rbs_gallery'),
    'default' => __('All', 'rbs_gallery' ),
    'id'	  => ROBO_GALLERY_PREFIX .'menuRootLabel',
    'type'    => 'rbstext',
    'after_row'		=> '
					</div>',
));



$button_group->add_field( array(
	'name' 			=> __('Self Label', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'menuSelf',
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(1),
	'type' 			=> 'switch',
	'showhide'		=> 1,
	'bootstrap_style'=> 1,
));







$button_group->add_field( array(
	'name'             => __( 'Style', 'rbs_gallery' ),
	'id'               => ROBO_GALLERY_PREFIX . 'buttonFill',
	'type'             => 'rbsselect',
	'show_option_none' => false,
	'level'			   => !ROBO_GALLERY_PRO,
	'default'          => 'border',
	'options'          => array(
		 'normal' 	=> __( 'Normal' , 	'cmb' ),
		 'flat' 	=> __( 'flat' , 	'cmb' ),
		 '3d'		=> __( '3d' , 		'cmb' ),
		 'border' 	=> __( 'Border' , 	'cmb' ),
	),
	 'before_row'=> 	'
	   			</div>
	        	<div role="tabpanel" class="tab-pane" id="menu_render"><br/>',
	
));

$button_group->add_field( array(
	'name'             => __( 'Color', 'rbs_gallery' ),
	'id'               => ROBO_GALLERY_PREFIX . 'buttonColor',
	'type'             => 'rbsselect',
	'show_option_none' => false,
	'level'			   => !ROBO_GALLERY_PRO,
	'default'          => 'red',
	'options'          => array(
		'gray' 		=> __( 'gray' , 'cmb' ),
		'blue' 		=> __( 'blue' , 'cmb' ),
		'green' 	=> __( 'green' , 'cmb' ),
		'orange' 	=> __( 'orange' , 'cmb' ),
		'red' 		=> __( 'red' , 'cmb' ),
		'purple' 	=> __( 'purple' , 'cmb' ),
	),
));

$button_group->add_field( array(
	'name'             => __( 'Rounds', 'rbs_gallery' ),
	'id'               => ROBO_GALLERY_PREFIX . 'buttonType',
	'type'             => 'rbsselect',
	'show_option_none' => false,
	'default'          => 'normal',
	'options'          => array(
		'normal' 	=> __( 'Normal' , 	'cmb' ),
		'rounded' 	=> __( 'Rounded' , 	'cmb' ),
		'pill' 		=> __( 'Pill' , 	'cmb' ),
		'circle' 	=> __( 'Circle ' , 	'cmb' ),
	),
));

$button_group->add_field( array(
	'name'             => __( 'Size', 'rbs_gallery' ),
	'id'               => ROBO_GALLERY_PREFIX . 'buttonSize',
	'type'             => 'rbsselect',
	'show_option_none' => false,
	'default'          => 'normal',
	'options'          => array(
		'jumbo' 	=> __( 'Jumbo' , 	'cmb' ),
		'large' 	=> __( 'Large' , 	'cmb' ),
		'normal' 	=> __( 'Normal' , 	'cmb' ),
		'small' 	=> __( 'Small' , 	'cmb' ),
		'tiny' 		=> __( 'Tiny ' , 	'cmb' ),
	),
));

$button_group->add_field( array(
	'name'             => __( 'Align', 'rbs_gallery' ),
	'id'               => ROBO_GALLERY_PREFIX . 'buttonAlign',
	'type'             => 'rbsselect',
	'show_option_none' => false,
	'default'          => 'left',
	'options'          => array(
		'left' 	=> __( 'Left' , 	'cmb' ),
		'center'=> __( 'Center' , 	'cmb' ),
		'right' => __( 'Right' , 	'cmb' ),
	),
));

$button_group->add_field( array(
	'name' 			=> __( 'Left Padding', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'paddingLeft',
	'type' 			=> 'slider',
	'bootstrap_style'=> 1,
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(5),
	'min'			=> 0,
	'addons'		=> 'px',
	'max'			=> 100,
));

$button_group->add_field( array(
	'name' 			=> __( 'Bottom Padding', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'paddingBottom',
	'type' 			=> 'slider',
	'bootstrap_style'=> 1,
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(10),
	'min'			=> 0,
	'max'			=> 100,
	'addons'		=> 'px',
	'after_row'		=> '
				</div>
				<div role="tabpanel" class="tab-pane" id="menu_search"><br/>'
));	


$button_group->add_field( array(
	'name' 			=> __('Search', 'rbs_gallery' ),
	'id' 			=> ROBO_GALLERY_PREFIX . 'searchEnable',
	'default'		=> rbs_gallery_set_checkbox_default_for_new_post(0),
	'type' 			=> 'switch',
	'showhide'		=> 1,
	'bootstrap_style'=> 1,
	
));
$button_group->add_field( array(
    'name'    => __('Search Text','rbs_gallery'),
    'default' => __('search', 'rbs_gallery' ),
    'id'	  => ROBO_GALLERY_PREFIX .'searchLabel',
    'type'    => 'rbstext',
    'after_row'		=> '
				</div>
			</div>
		</div>
    </div>
</div>'
));