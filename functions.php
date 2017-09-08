<?php

function donsepe_resources() {

    // Stylesheets
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css', array(), '4.0.0', 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '', 'all');
    wp_enqueue_style('font-awesome', get_stylesheet_uri(), array(), '', 'all');

    // Scripts
    wp_enqueue_script( 'smooth_scroll', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false);
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"', array(), '4.0.0', false);
}

add_action('wp_enqueue_scripts', 'donsepe_resources');


function wpcodex_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );


