<?php
/**
 * Functions and definitions
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */

// enable theme support for featured images
add_theme_support('post-thumbnails');
// enable Wordpress generated titles
add_theme_support('title-tag');

// navigation
function thunderblog_register_menus() {
  register_nav_menus([
    'primary' => __('Main Menu'),
    'footer'  => __('Footer Menu')
  ]);
}
add_action('init', 'thunderblog_register_menus');

// widgets
function thunderblog_register_footer_widgets() {
	register_sidebar([
		'name'          => __('Footer Column 1', 'thunderblog'),
		'id'            => 'footer-1',
		'description'   => __('Appears on the first footer column.', 'thunderblog'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	]);
	register_sidebar([
		'name'          => __('Footer Column 2', 'thunderblog'),
		'id'            => 'footer-2',
		'description'   => __('Appears on the second footer column.', 'thunderblog'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	]);
	register_sidebar([
		'name'          => __('Footer Column 3', 'thunderblog'),
		'id'            => 'footer-3',
		'description'   => __('Appears on the third footer column.', 'thunderblog'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	]);
}
add_action('widgets_init', 'thunderblog_register_footer_widgets', 20);

// load styles
wp_enqueue_style('style', get_stylesheet_uri());
