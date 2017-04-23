 <?php
 /*
  * Plugin Name: Responsive Image Gallery
  * Description: Image gallery made by integrating "collagePlus" and "Photobox" jquery plugin
  * Version: 3.1
  * Author: Sajesh Bahing
  * Author URI: http://www.sajes-bahing.com.np
  * Plugin URI: http://wordpress.org/plugins/responsive-image-gallery/
  * 
  */
  
require_once 'util.php';
require_once 'ResponsiveImageGalleryAdmin.php';

class ImageGallery{
	var $collageOptions, $fancyOption;
	static $add_script;
	
	function __construct(){
		$this->adminPanel();
		
		add_shortcode('show-responsive-image-gallery-by-sajesh', array($this, 'galleryShortcode'));
		add_action('init', array($this, 'register_script'));
		add_action('wp_footer', array($this, 'print_script'));
		
		add_filter('the_content', array($this, 'responsiveImageGallerySingle'));
	}
	
	function responsiveImageGallerySingle($content){
		global $post;
		
		if($post->post_type == 'responsive_gallery'){
			return do_shortcode('[show-responsive-image-gallery-by-sajesh gallery="'.$post->ID.'"]'); 
		}
		
		return $content;
	}
	
	function register_script(){
		wp_register_style('responsive-image-gallery-collage-plus-css', plugins_url('collage-plus/css/transitions.css', __FILE__));
		wp_register_style('responsive-image-gallery-photobox-css', plugins_url('photobox/photobox/photobox.css', __FILE__));
		
		wp_register_script('responsive-image-gallery-collage-plus', plugins_url('collage-plus/jquery.collagePlus.min.js', __FILE__), array('jquery'));
		wp_register_script('responsive-image-gallery-collage-remove-whitespace', plugins_url('collage-plus/extras/jquery.removeWhitespace.min.js', __FILE__), array('jquery'));
		wp_register_script('responsive-image-gallery-collage-caption', plugins_url('collage-plus/extras/jquery.collageCaption.min.js', __FILE__), array('jquery'));
		wp_register_script('responsive-image-gallery-photobox', plugins_url('photobox/photobox/jquery.photobox.js', __FILE__), array('jquery'));
	}
	
	function print_script(){
		if ( ! self::$add_script )
			return;
		wp_print_styles('responsive-image-gallery-collage-plus-css');
		wp_print_styles('responsive-image-gallery-photobox-css');
		
		wp_print_scripts('responsive-image-gallery-collage-plus');
		wp_print_scripts('responsive-image-gallery-collage-remove-whitespace');
		wp_print_scripts('responsive-image-gallery-collage-caption');
		wp_print_scripts('responsive-image-gallery-photobox');
	}
	
	private function adminPanel(){
		new ResponsiveImageGalleryAdmin;
	}
	
	public function setCollageOption($option = ''){
		if($option != '')
			$this->collageOptions = $option;
		else
			$this->collageOptions = '';
	}
	
	public function getCollageOption(){
		return $this->collageOptions;
	}
	
	public function setFancyOption($option = ''){
		if($option != '')
			$this->fancyOption = $option;
		else
			$this->fancyOption = '';
	}

	public function getFancyOption(){
		return $this->fancyOption;
	} 
	
	function galleryShortcode($atts){
		self::$add_script = true;
		
		$post_id = $atts['gallery'];
		
		$value = get_post_meta( $post_id, 'responsive_image_gallery_images', true );
		$collage_options = get_post_meta( $post_id, 'responsive_image_collage', true );
		$style = get_post_meta( $post_id, 'responsive_gallery_style', true );
		$collage_options = json_decode($collage_options);

		foreach($collage_options as $key => $value_){
			if($value_ == 'true')
				$collage_options->$key = TRUE;
			else if(($value_ == 'false'))
				$collage_options->$key = FALSE;
		}
		$collage_options = json_encode($collage_options);
		$this->setCollageOption($collage_options);
		
		$fancySetting = get_post_meta( $post_id, 'responsive_image_photobox', true );
		if($fancySetting != ''){
			$fancySetting = (array) json_decode($fancySetting);
			
			foreach($fancySetting as $key => $value_){
				if(is_numeric($value_))
					$fancySetting[$key] = (int) $value_;
			}
			
			$fancySetting = json_encode($fancySetting);
			$this->setFancyOption($fancySetting);
		}else{
			$this->setFancyOption();
		}
		
		if($value != ''){
			$array = (array) json_decode($value);
			$array = array_reverse($array);
			
			$string = '<div class="Collage Collage-'.$post_id.'">';
			foreach($array as $value){
				//(thumbnail, medium, large or full)
				$image = wp_get_attachment_image_src($value->image, 'full');
				$image_ = wp_get_attachment_image_src($value->image, 'thumbnail');
				$string .= '<div class="Image_Wrapper" '. (isset($value->description)? 'data-caption="'.$value->description.'"' : '' ) .'><a class="fancybox-'.$post_id.'" href="'.$image[0].'" '. (isset($value->description)? 'title="'.$value->description.'"' : '' ) .' ><img src="'.$image_[0].'" alt="" title="'. (isset($value->description)? $value->description : '' ) .'" /></a></div>';
			}
			$string .= '</div>
			<style>
				'.$style.'
			</style>'."
			
			<script>
				jQuery(document).ready(function($){
					$('.Collage-".$post_id."').removeWhitespace().collagePlus(".$this->getCollageOption().");
					$('.Collage-".$post_id."').collageCaption();
					var options = JSON.parse('". (($this->getFancyOption() != '')? $this->getFancyOption() : '{}') ."');
					$('.Collage-".$post_id."').photobox('a', options);
				});
			</script>";
			
			$this->setCollageOption();
			$this->setFancyOption();
			return $string;
		}else{
			return '<h1>No Images in the gallery</h1>';
		}
	}
}

new ImageGallery;