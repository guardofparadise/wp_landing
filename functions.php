<?php
function restaurant_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'restaurant_setup');

function restaurant_styles() {

wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0');
wp_register_style('owlcarousel', get_template_directory_uri() . '/owl-carousel/assets/owl.carousel.min.css', array(), '1.0');

wp_register_style('reboot', get_template_directory_uri() . '/css/bootstrap-reboot.min.css', array(), '1.0');
wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
wp_register_style('style', get_template_directory_uri() . '/css/style.css');

wp_enqueue_style('font-awesome');
wp_enqueue_style('owlcarousel');
wp_enqueue_style('bootstrap');

wp_enqueue_style('style');

$apikey = esc_html(get_option('lapizzeria_gmap_apikey'));

wp_register_script('jquery1', get_template_directory_uri() . '/js/jquery-3.3.1.slim.min.js', array(), '1.0');
wp_register_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0');
wp_register_script('popper', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0');
wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0');
wp_register_script('owlcarouseljs', get_template_directory_uri() . '/owl-carousel/owl.carousel.min.js', array(), '1.0');

wp_deregister_script( 'jquery' );

wp_enqueue_script('jquery1');
wp_enqueue_script('popper');

wp_enqueue_script('bootstrap');
wp_enqueue_script('owlcarouseljs');
wp_enqueue_script('main');

}

function restaurant_menus() {
	register_nav_menus(array(
		'header-menu' => 'Header Menu'
	));
}
add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2 );
function add_my_class_to_nav_menu( $classes, $item ){
	/* $classes содержит
	Array(
		[1] => menu-item
		[2] => menu-item-type-post_type
		[3] => menu-item-object-page
		[4] => menu-item-284
	)
	*/
	$classes[] = 'nav-item';

	return $classes;
}



add_action('init', 'restaurant_menus');

add_action('wp_enqueue_scripts', 'restaurant_styles');



function restaurant_specialties() {
	$labels = array(
		'name'								=> _x('Pizzas', 'restaurant'),
		'singular_name'				=> _x('Pizza', 'post type singular name', 'restaurant'),
		'menu_name'						=> _x('Pizzas', 'admin menu', 'restaurant'),
		'name_admin_bar'			=> _x('Pizzas', 'add new on admin bar', 'restaurant'),
		'add_new'							=> _x('Add New', 'book', 'restaurant'),
		'add_new_item'				=> __('Add New Pizza', 'restaurant'),
		'new_item'						=> __('New Pizzas', 'restaurant'),
		'edit_item'						=> __('Edit Pizzas', 'restaurant'),
		'view_item'						=> __('View Pizzas', 'restaurant'),
		'all_items'						=> __('All Pizzas', 'restaurant'),
		'search_items'				=> __('Search Pizzas', 'restaurant'),
		'parent_item_colon'		=> __('Parent Pizzas:', 'restaurant'),
		'not_found'						=> __('No Pizzas found', 'restaurant'),
		'not_found_in_trash'	=> __('No Pizzas found in trash', 'restaurant')
	);

	$args = array(
		'labels' 							=> $labels,
		'description'					=> __('Description', 'restaurant'),
		'public'							=> true,
		'publicly_queryable'	=> true,
		'show_ui'							=> true,
		'show_in_munu'				=> true,
		'query_var'						=> true,
		'rewrite'							=> array('slug' => 'specialties'),
		'capability_type'			=> 'post',
		'has_archive'					=> true,
		'hierarchical'				=> false,
		'menu_position'				=> 6,
		'supports'						=> array('title','editor','thumbnail'),
		'taxonomies'					=> array('category'),
	);
	register_post_type('specialties', $args);
}
add_action('init', 'restaurant_specialties');