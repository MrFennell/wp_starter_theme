<?php 

function load_stylesheets()

{
    wp_register_style('stylesheet', get_template_directory_uri() . '/css/bootstrap.min.css',
        array(), false, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('style', get_template_directory_uri() . '/style.css',
        array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_jquery()
{
    wp_deregister_script('jquery');
    
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', '', 1 ,true);
}
add_action('wp_enqueue_scripts', 'load_jquery');

function loadjs()
{
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true );
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');


function custom_load_bootstrap_js() {
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1 ,true);
}
add_action( 'wp_enqueue_scripts', 'custom_load_bootstrap_js' );

add_theme_support('menus');

add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);

// Register Customer Navigation Walker
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);


?>