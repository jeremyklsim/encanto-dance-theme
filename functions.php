<?php
/*
* Dance theme functions and definitions
*/

if( !function_exists('edt_setup')):
function edt_setup()
{
    // enqueue styles
    wp_enqueue_style('edt-style', get_stylesheet_uri());

    // responsive nav css import
    wp_enqueue_style('edt-style-responsive-nav', get_template_directory_uri() . '/assets/css/responsive-nav.css');

    // responsive nav js import
    wp_enqueue_script('edt-script-responsive-nav', get_template_directory_uri() .'/assets/js/responsive-nav.js');
    
    // custom js
    wp_enqueue_script('edt-script', get_template_directory_uri() .'/assets/js/main.js');

    


    // featured image
    add_theme_support('post-thumbnails');

    // custom theme logo
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
    ));

    // register menus
    register_nav_menus(array(
        'primary-menu' => __('Primary')
    ));

}
endif;
add_action('after_setup_theme', 'edt_setup'); 

