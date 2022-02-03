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

// navigation menus for top and footer menu
function thunderblog_register_menus() {
  register_nav_menus([
    'primary' => __('Main Menu'),
    'footer'  => __('Footer Menu')
  ]);
}
add_action('init', 'thunderblog_register_menus');

// footer widgets for three columns
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

// custom comment template
function thunderblog_comment($comment, $args, $depth) { ?>
	<div class="comment" id="comment-<?= comment_ID() ?>">
		<div class="avatar">
			<?php if ($args['avatar_size'] != 0): ?>
				<?= get_avatar($comment, $args['avatar_size']) ?>
			<?php endif; ?>
		</div>
		<h3 class="comment-meta">
			<cite><?= get_comment_author() ?></cite>
			<?= _e('wrote on', 'thunderblog') ?>
			<time>
				<a href="<?= htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php
					/* translators: 1: date, 2: time */
					printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()); ?>
				</a>
			</time>
			<span class="ml-auto"><?= edit_comment_link(__('Edit', 'thunderblog')) ?></span>
		</h3>
		<blockquote>
			<?php if ($comment->comment_approved == '0'): ?>
				<em><?= _e('Your comment is awaiting moderation.', 'thunderblog') ?></em>
			<?php endif; ?>
			<?= comment_text() ?>
			<?= comment_reply_link(array_merge(
				$args, 
				[ 
					'depth'     => $depth, 
					'max_depth' => $args['max_depth'] 
				]
			)) ?>
		</blockquote><?php
}

// customize customizer to add theme options
function thunderblog_customize_register($wp_customize) {
	// custom download link
	$wp_customize->add_setting('download_url');
	$wp_customize->add_control('download_url', [
		'label' => __( 'Download URL' ),
		'type' => 'url',
		'section' => 'title_tagline',
	]);
	// custom donation link
	$wp_customize->add_setting('donation_url');
	$wp_customize->add_control('donation_url', [
		'label' => __( 'Donation URL' ),
		'type' => 'url',
		'section' => 'title_tagline',
	]);
}
add_action('customize_register', 'thunderblog_customize_register');

// load styles
wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/normalize.css');
wp_enqueue_style('style', get_stylesheet_uri());

// load scripts
wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/main.js', [], 1.0, true);
