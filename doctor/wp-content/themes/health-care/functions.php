<?php
add_action( 'wp_enqueue_scripts', 'health_care_theme_css',999);
function health_care_theme_css() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
	wp_enqueue_style( 'default-css', get_stylesheet_directory_uri()."/css/default.css" );
	wp_dequeue_style('health-center-lite-default',get_template_directory_uri() .'/css/default.css');
}

function health_care_remove_some_widgets(){

	// Unregister sidebars
	unregister_sidebar( 'sidebar-service' );
}
add_action( 'widgets_init', 'health_care_remove_some_widgets', 11 );

require( get_stylesheet_directory() . '/functions/widget/custom-sidebar.php' );


/**
 * Enqueue script for custom customize control.
 */
function health_care_custom_customize_enqueue() {
	wp_enqueue_script( 'health_care_customizer_script', get_stylesheet_directory_uri() . '/js/healthcenter_customizer.js', array( 'jquery', 'customize-controls' ), false, true );
}
add_action( 'customize_controls_enqueue_scripts', 'health_care_custom_customize_enqueue' );


add_action( 'after_setup_theme', 'health_care_setup' );
   	function health_care_setup()
   	{	
		load_theme_textdomain( 'health-care', get_stylesheet_directory() . '/languages' );
	}
?>