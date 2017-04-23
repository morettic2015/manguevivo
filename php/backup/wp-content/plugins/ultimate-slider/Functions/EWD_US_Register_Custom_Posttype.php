<?php

function EWD_US_Register_Custom_Posttype(){

	// if (get_option("current_theme") == "Ultimate Showcase") {$Menu = 'EWD-UPCP-Theme-options';}
	// else {$Menu = true;}

	register_post_type(
		'ultimate_slider',
		array(
			'labels' => array(
			'name' => __( 'Ultimate Slider' ),
			'singular_name' => __( 'Slide' ),
			'add_new_item' => __( 'Add New Slide' ),
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'ultimate-slider'),
		'supports'=> array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' )
		)
	);
}
add_action( 'init', 'EWD_US_Register_Custom_Posttype' );

//categories
add_action( 'init', 'EWD_US_Register_Category_Taxonomy', 0 );
function EWD_US_Register_Category_Taxonomy(){
    register_taxonomy(
        'ultimate_slider_categories',
        array(
            'ultimate_slider',
        ),
        array(
            'public' => true,
            'hierarchical' => true,
            'labels' => array(
                'name' => __( 'Slider Categories'),
                'singular_name' => __( 'Slider Category' ),
            ),
        )
    );
}

//tags
add_action( 'init', 'EWD_US_Register_Tags_Taxonomy', 0 );
function EWD_US_Register_Tags_Taxonomy(){
    register_taxonomy(
        'ultimate_slider_tags',
        array(
            'ultimate_slider',
        ),
        array(
            'public' => true,
            'hierarchical' => false,
            'labels' => array(
                'name' => __( 'Slider Tags'),
                'singular_name' => __( 'Slider Tag' ),
            ),
        )
    );
}
