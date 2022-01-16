<?php
/**
 * Displays the primary site navigation.
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */

if (has_nav_menu('primary')) {
	wp_nav_menu([
		'theme_location' => 'primary',
		'items_wrap'     => '<ul>%3$s</ul>',
		'fallback_cb'    => false,
		'depth'          => 1,
	]);
}
