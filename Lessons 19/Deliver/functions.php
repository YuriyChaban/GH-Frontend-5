<?php

require('/custom-type.php');

function blogin_theme_load_resources()
{
    wp_enqueue_style('deliver_style', get_template_directory_uri() . '/stylesheets/style.css');
    wp_enqueue_style('deliver_style', get_template_directory_uri() . '/stylesheets/NovecentowideDemiBold.css');
}

add_action('wp_enqueue_scripts', 'blogin_theme_load_resources');

function wpb_add_fonts()
{

    wp_enqueue_style('wpb-fonts', 'https://fonts.googleapis.com/css?family=Pacifico', false);
    wp_enqueue_style('wpb-fonts', 'https://gist.github.com/gpessia/8595729', false);
    wp_enqueue_style('wpb-fonts', 'http://www.myfontfree.com/data/502/h/helveticaneue/HelveticaNeue.ttf', false);
}

add_action('wp_enqueue_scripts', 'wpb_add_fonts');

// widget footer
if (function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Footer Sidebar',
        'id' => 'footer-sidebar',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ));
// blog footer
if (function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'before_widget' => '<div class="widget-blog-item">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-blog-title">',
        'after_title' => '</div>',
    ));
//Theme setup
function deliver_setup()
{

    //Navigation Menus

    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
        'portfolio' => __('Portfolio Menu'),
        'smallnav' => __('Footer Small Menu'),
    ));

    // Add feature image support
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'deliver_setup');

//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets()
{
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'enqueue_our_required_stylesheets');

// in the function below, I am using my blm prefix. If you have one of your own, you might want to use it.
// Don't forget that it's used twice. Make sure to change both instances.

function blm_init_method()
{
    /* Enqueue custom Javascript here using wp_enqueue_script().
    http://codex.wordpress.org/Function_Reference/wp_enqueue_script*/

    wp_enqueue_script('jquery');
    wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.js', array('jquery'), '1.3');
    wp_enqueue_script('slides', get_template_directory_uri() . '/js/slides.min.jquery.js', array('jquery', 'easing'));

}

add_action('wp_enqueue_scripts', 'blm_init_method');


