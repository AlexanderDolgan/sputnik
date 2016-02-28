<?php

function wps_theme_styles () {
	wp_enqueue_style('mainstyle', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'wps_theme_styles');

function wps_theme_scripts() {
	wp_enqueue_script('main_script', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scipts', 'wps_theme_scripts');

//add theme support
add_theme_support( 'post-thumbnails' );

// Navigation Menus
function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}

add_action( 'init', 'register_theme_menus' );