<?php

//Adding stylesheets to the wordpress
function lapi_styles(){
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), 6.0);
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1.0);
	wp_enqueue_style('normalize');
	wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'lapi_styles');

//Add Menus to the WordPress
function lapi_menus(){
	register_nav_menus(array(
		'header-menu' => __('Header Menu', 'wprestaurant' ),
		'social-menu' => __('Social Menu', 'wprestaurant' )
	));

}
add_action('init', 'lapi_menus');
//init hook initialize the WordPress.
