<?php

function wps_theme_styles () {
	wp_enqueue_style('mainstyle', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'wps_theme_styles');

//link scripts
function wps_theme_js() {
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('map'), '', true );
	wp_enqueue_script( 'map', '//api-maps.yandex.ru/2.1/?lang=ru_RU', '', '', true);
}

add_action( 'wp_enqueue_scripts', 'wps_theme_js' );

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