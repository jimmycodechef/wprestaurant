<?php

//Adding Stylesheet to theme
function restro_styles(){
	//Adding Stylesheets
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0');
	wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0');
	wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');

	wp_enqueue_style('normalize');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('style');

	//Registering JavaScript Files
	//Set last parameter to true for adding scripts to footer
	wp_register_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
	//Adding JavaScript Files
	wp_enqueue_script('jquery'); //We need not to download jQuery. It will be enqueued automatically
	wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'restro_styles');

//Adding Menus to the wordpress theme
function restro_menus(){
	register_nav_menus([
		'header-menu' => __('Header Menu', 'restro'),
		'social-menu' => __('Social Menu', 'restro')
	]);

}
add_action('init', 'restro_menus');