<?php

function pizzeria_setup(){
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'pizzeria_setup');

function pizzeria_styles(){
    //adding stylesheets
    wp_register_style( 'googlefont','https://fonts.googleapis.com/css?family=Open+Sans:400,700,800|Raleway:500i,700,800', array(), '1.0.0' );
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css',  array(), '8.0.1' );
    wp_register_style('style', get_template_directory_uri() . '/style.css',  array('normalize'), '1.0' );
    //Enqueue the styles
    wp_enqueue_style('normalize');
    wp_enqueue_style('fontawesome', 'https//use.fontawesome.com/releases/v5.4.1/css/all.css');
    wp_enqueue_style('googlefont');
    wp_enqueue_style('style');

    wp_register_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true );
    //add JavaScript files
    wp_enqueue_script('jquery');
    wp_enqueue_script('script');
}

add_action('wp_enqueue_scripts', 'pizzeria_styles');

//Add Menus
function pizzeria_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'pizzeria'),
        'social-menu' => __('Social Menu', 'pizzeria')
    ) );
}

add_action('init', 'pizzeria_menus');
