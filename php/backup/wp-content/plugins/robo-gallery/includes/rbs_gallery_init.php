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

define( "ROBO_GALLERY_PREFIX",     'rsg_');
define( "ROBO_GALLERY_TYPE_POST",  'robo_gallery_table');

define( "ROBO_GALLERY_ICON_PRO",  '<button type="button"  class="btn btn-danger btn-xs rbs-label-pro">Pro</button>');
define( "ROBO_GALLERY_LABEL_PRO", '<span>'.__( 'Available in', 'rbs_gallery' ).'</span> '.ROBO_GALLERY_ICON_PRO);

define( "ROBO_GALLERY_ICON_UPDATE_PRO",  '<button type="button"  class="btn btn-success btn-xs rbs-label-pro">Pro</button>');
define( "ROBO_GALLERY_LABEL_UPDATE_PRO", '<span>'.__( 'Please update ', 'rbs_gallery' ).'</span> '.ROBO_GALLERY_ICON_UPDATE_PRO.'<span>'.__( ' key', 'rbs_gallery' ).'</span> ');

if(!function_exists('rbs_gallery_include')){
	function rbs_gallery_include( $filesForInclude, $path = '' ){
		$filesArray = array();
		if(empty($filesForInclude)) return;
		if( !is_array($filesForInclude) ) $filesArray[] = $filesForInclude;
			else $filesArray = $filesForInclude;
		for ($i=0; $i < count($filesArray); $i++) { 
			$item = $filesArray[$i];
			if( file_exists($path.$item) ) require_once $path.$item;
		}
	}
}


rbs_gallery_include(array( 'rbs_gallery_config.php', 'rbs_gallery_button.php', 'rbs_gallery_widget.php'), ROBO_GALLERY_INCLUDES_PATH);

if(!function_exists('rbs_gallery_is_edit_page')){
    function rbs_gallery_is_edit_page($new_edit = null){
        global $pagenow;
        if (!is_admin()) return false;
        if($new_edit == "list")             return in_array( $pagenow, array( 'edit.php',  ) );
            elseif($new_edit == "edit")     return in_array( $pagenow, array( 'post.php' ) );
                elseif($new_edit == "new")  return in_array( $pagenow, array( 'post-new.php' ) );
                    else  return in_array( $pagenow, array( 'post.php', 'post-new.php', 'edit.php' ) );
    }
}

if(!function_exists('rbs_gallery_get_current_post_type')){
    function rbs_gallery_get_current_post_type() {
        global $post, $typenow, $current_screen;
        if ( $post && $post->post_type )                          return $post->post_type;
          elseif( $typenow )                                      return $typenow;
          elseif( $current_screen && $current_screen->post_type ) return $current_screen->post_type;
          elseif( isset( $_REQUEST['post_type'] ) )               return sanitize_key( $_REQUEST['post_type'] );
          elseif (isset( $_REQUEST['post'] ) && get_post_type($_REQUEST['post']))               return get_post_type($_REQUEST['post']);
        return null;
    }
}

function create_post_type_robo_gallery() { 

	require_once ROBO_GALLERY_INCLUDES_PATH.'rbs_class_update.php';
	$update = new RoboGalleryUpdate();
	
	$supportArray = array( 'title', 'comments' );
	if( get_option(ROBO_GALLERY_PREFIX.'categoryShow', 0) ){
		$supportArray[] = 'page-attributes';
	}	

    register_post_type( ROBO_GALLERY_TYPE_POST,
        array(
          'labels' => array(
            'name' => 'Robo Gallery',
            'singular_name' => _x( 'Robo Gallery', 		'post type singular name', 'rbs_gallery' ),
            'all_items'     => __( 'Galleries List', 	'rbs_gallery' ),
            'add_new'       => __( 'Add Gallery', 		'rbs_gallery' ),
            'add_new_item'  => __( 'Add Gallery', 		'rbs_gallery' ),
            'edit_item'     => __( 'Edit Gallery', 		'rbs_gallery' ),
          ),

          'rewrite'         => array( 'slug' => 'gallery', 'with_front' => true ),
          'public'      	=> true,
          'has_archive'   	=> false,
          'hierarchical'  	=> true,
          'supports'    	=> $supportArray,
          'menu_icon'     	=> 'dashicons-format-gallery',
    ));
    if ( is_admin() && get_option( 'robo_gallery_after_install' ) == '1' ) {
        delete_option( 'robo_gallery_after_install' );
        global $wp_rewrite; $wp_rewrite->flush_rules();
    }
}
add_action( 'init', 'create_post_type_robo_gallery' );

if(!function_exists('rbs_gallery_main_init')){
    function rbs_gallery_main_init() {

		if( rbs_gallery_get_current_post_type() == ROBO_GALLERY_TYPE_POST && rbs_gallery_is_edit_page('list') ){
		    rbs_gallery_include('rbs_gallery_list.php', ROBO_GALLERY_INCLUDES_PATH);
		}

		if( rbs_gallery_get_current_post_type() == ROBO_GALLERY_TYPE_POST && !ROBO_GALLERY_PRO  ){
		    rbs_gallery_include('rbs_gallery_topblock.php', ROBO_GALLERY_INCLUDES_PATH);
		}

		if( rbs_gallery_get_current_post_type() == ROBO_GALLERY_TYPE_POST && ( rbs_gallery_is_edit_page('new') || rbs_gallery_is_edit_page('edit') ) ){

		    // Adding the Metabox class
		    rbs_gallery_include('init.php', ROBO_GALLERY_CMB_PATH);

		     /* Field */
		    rbs_gallery_include( array( 	
		    	'toolbox/cmb-field-toolbox.php',
				'gallery/cmb-field-gallery.php', 
				'size/cmb-field-size.php',
				'loading/cmb-field-loading.php',
				'color/jw-cmb2-rgba-colorpicker.php',
				'border/cmb-field-border.php',
				'shadow/cmb-field-shadow.php',
				'switch/cmb-field-switch.php',
				'rbsselect/cmb-field-rbsselect.php',
				'slider/cmb-field-slider.php',
				'colums/cmb-field-colums.php',
				'rbstext/cmb-field-rbstext.php',
				'rbstextarea/cmb-field-rbstextarea.php',
				'font/cmb-field-font.php',
				'rbsgallery/cmb-field-rbsgallery.php',
				'multisize/rbs-multiSize.php',
				'rbsradiobutton/rbs-radiobutton.php',
				'padding/rbs-padding.php',
		    ), ROBO_GALLERY_CMB_FILEDS_PATH);
		   
		    rbs_gallery_include('rbs_gallery_edit.php', ROBO_GALLERY_INCLUDES_PATH);
		}

		/* only backend */
		if( is_admin() ) rbs_gallery_include(array('rbs_gallery_media.php', 'rbs_gallery_menu.php' ), ROBO_GALLERY_INCLUDES_PATH);

		/* Frontend*/
		rbs_gallery_include(array('rbs_gallery_source.php', 'rbs_gallery_helper.php', 'rbs_gallery_class_utils.php', 'rbs_gallery_class.php', 'rbs_gallery_frontend.php' ), ROBO_GALLERY_FRONTEND_PATH);

		/* AJAX */
		rbs_gallery_include('rbs_gallery_ajax.php', ROBO_GALLERY_INCLUDES_PATH);
		rbs_gallery_include('rbs_create_post_ajax.php', ROBO_GALLERY_EXTENSIONS_PATH);

		/*  Init function */
			/* backup init */
		rbs_gallery_include('backup/backup.init.php', 		ROBO_GALLERY_EXTENSIONS_PATH);
			/* category init */
		if( !get_option(ROBO_GALLERY_PREFIX.'categoryShow', 0) ){
			rbs_gallery_include('category/category.init.php', 	ROBO_GALLERY_EXTENSIONS_PATH);
		}
			/* stats init */
		rbs_gallery_include('stats/stats.init.php', 	ROBO_GALLERY_EXTENSIONS_PATH);
	}
}

add_action( 'plugins_loaded', 'rbs_gallery_main_init' );