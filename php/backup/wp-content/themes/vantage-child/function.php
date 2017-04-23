<?php

function theme_enqueue_styles() {
	$estilo_pai = 'parent-style';

    wp_enqueue_style( $estilo_pai, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $estilo_pai) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>