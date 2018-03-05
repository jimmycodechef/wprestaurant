<?php
//Adding Thumbnail Support inside Theme
function lapi_setup(){
	add_theme_support('post-thumbnails');

	add_image_size('boxes', 437, 291, true);
}
add_action('after_setup_theme', 'lapi_setup');

//Adding stylesheets to the wordpress
function lapi_styles(){
	//Adding Stylesheets
	wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700,900,900i', array(), '1.0.0');
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '6.0');
	wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0');

	//Enqueue the style
	wp_enqueue_style('googlefonts');
	wp_enqueue_style('normalize');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('style');

	// - Adding JavaScript
	// - The last parameter is set true (to load JS in footer). We can use false to load js file in header. Add wp_footer() function above
	//   the </body> closing tag.
	wp_register_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
	//Add JavaScript Files
	wp_enqueue_script('jquery');    //Enque jQuery File does not require Adding as adding script.js
	wp_enqueue_script('script');
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
