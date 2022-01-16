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
add_theme_support( 'title-tag' );

// navigation
function register_menus() {
  register_nav_menus([
    'primary' => __('Main Menu'),
    'footer'  => __('Footer Menu')
  ]);
}
add_action('init', 'register_menus');

// load styles
wp_enqueue_style('style', get_stylesheet_uri());
