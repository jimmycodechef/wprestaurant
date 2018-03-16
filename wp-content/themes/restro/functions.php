<?php

function restro_setup(){
	add_theme_support('post-thumbnails');
	add_image_size('boxes', 437, 291, true);
	add_image_size('specialties', 768, 515, true);
}
add_action('after_setup_theme', 'restro_setup');


//Adding Stylesheet to theme
function restro_styles(){
	//Adding Stylesheets
	wp_register_style('googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700,900', array(), '1.0.0');
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0');
	wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0');
	wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');

	wp_enqueue_style('normalize');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('googlefont');
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


function restro_specialties() {
	$labels = array(
		'name'               => _x( 'Pizzas', 'restro' ),
		'singular_name'      => _x( 'Pizza', 'post type singular name', 'restro' ),
		'menu_name'          => _x( 'Pizzas', 'admin menu', 'restro' ),
		'name_admin_bar'     => _x( 'Pizzas', 'add new on admin bar', 'restro' ),
		'add_new'            => _x( 'Add New', 'book', 'restro' ),
		'add_new_item'       => __( 'Add New Pizza', 'restro' ),
		'new_item'           => __( 'New Pizza', 'restro' ),
		'edit_item'          => __( 'Edit Pizza', 'restro' ),
		'view_item'          => __( 'View Pizza', 'restro' ),
		'all_items'          => __( 'All Pizzas', 'restro' ),
		'search_items'       => __( 'Search Pizzas', 'restro' ),
		'parent_item_colon'  => __( 'Parent Pizzas:', 'restro' ),
		'not_found'          => __( 'No Pizzas found.', 'restro' ),
		'not_found_in_trash' => __( 'No Pizzas found in Trash.', 'restro' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'restro' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'specialties' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'specialties', $args );
}

add_action( 'init', 'restro_specialties' );