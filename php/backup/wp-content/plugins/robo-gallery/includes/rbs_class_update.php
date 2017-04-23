<?php
/*
*      Robo Gallery     
*      Version: 1.5.2
*      By Robosoft
*
*      Contact: http://robosoft.co
*      Created: 2015
*      Licensed under the GPLv2 license - http://opensource.org/licenses/gpl-2.0.php
*
*      Copyright (c) 2014-2016, Robosoft. All rights reserved.
*      Available only in  http://robosoft.co/robogallery
*/

if(!defined('WPINC'))die;
if(!defined("ABSPATH"))exit;

class RoboGalleryUpdate {
	public $posts = array();

	public $needUpdate = 1;

	public $dbVersionOld = false;

	public $dbVersion = false;

	public $fieldArray = array(
			'1.3.5' => array(
					'lightboxCounter' => 1,
			),
			'1.3.6' => array(
					'lightboxClose' => 1,
			),
			'1.3.7' => array(
					'lightboxArrow' => 1,
			),
			'1.3.8' => array(
					'menuSelfImages' => 1,
			),
			'1.3.9' => array(
					'menuSelfImages' => 1,
			),
			'2.5.2' => array(
					'lightboxCounterText' => ' of ',
			),
			'2.5.3' => array(
					'lightboxSocialFacebook' 	=> 1,
					'lightboxSocialTwitter' 	=> 1,
					'lightboxSocialGoogleplus' 	=> 1,
					'lightboxSocialPinterest' 	=> 1,
					'lightboxSocialVK' 			=> 0,
			)
		); 

	public $functionArray = array(
		);

	public function __construct(){
		$curVersion = get_option( 'RoboGalleryInstallVersion' );

		if( $curVersion != ROBO_GALLERY_VERSION ){
			delete_option('RoboGalleryInstallDate');
			add_option( 'RoboGalleryInstallDate', time() );
			add_option( "RoboGalleryInstallVersion", ROBO_GALLERY_VERSION );
		}
		
		$this->dbVersionOld = get_option( 'rbs_gallery_db_version' );
		if(!$this->dbVersionOld) $this->dbVersionOld = 0;

		$this->dbVersion = ROBO_GALLERY_VERSION;

		if( $this->dbVersionOld && $this->dbVersionOld == $this->dbVersion )  $this->needUpdate = false;

		if( $this->needUpdate ){
			delete_option("robo_gallery_after_install");
			add_option( 'robo_gallery_after_install', '1' );

			delete_option("rbs_gallery_db_version");
			add_option( "rbs_gallery_db_version", ROBO_GALLERY_VERSION );
			$this->posts = $this->getGalleryPost();
			$this->update();
		}
	}


	public function getGalleryPost(){
		$my_wp_query = new WP_Query();
 		return $my_wp_query->query( 
				array( 
					'post_type' => ROBO_GALLERY_TYPE_POST, 
					'posts_per_page' => 999, 
				)
			);
	}
	
	public function fieldInit( $fields ){
		for($i=0;$i<count($this->posts);$i++){
			$postId = $this->posts[$i]->ID;
			if( count($fields) ){
				foreach($fields as $key => $value){
					add_post_meta( $postId, ROBO_GALLERY_PREFIX.$key, $value, true );
				}
			}
		}
	}



	public function update(){
		if( count($this->fieldArray) ){
			foreach($this->fieldArray as $version => $fields){
				if( 
					version_compare( $version, $this->dbVersionOld, '>') || 
					version_compare( $version, $this->dbVersion, '<=') 
				){
					if( isset($fields) ) $this->fieldInit( $fields );
				}
			}
		}
	}
}
