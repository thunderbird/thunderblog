<?php
/**
 * Functions and definitions
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */

if ( ! defined( 'THUNDERBLOG_VERSION' ) ) {
	define( 'THUNDERBLOG_VERSION', '1.0.12' );
}

// enable theme support for featured images
add_theme_support( 'post-thumbnails' );
// enable Wordpress generated titles
add_theme_support( 'title-tag' );
// enable automatic RSS links in the header
add_theme_support( 'automatic-feed-links' );

// navigation menus for top and footer menu
function thunderblog_register_menus() {
  register_nav_menus([
    'primary' => __( 'Main Menu' ),
    'footer'  => __( 'Footer Menu' ),
  ]);
}
add_action( 'init', 'thunderblog_register_menus' );

// footer widgets for three columns
function thunderblog_register_footer_widgets() {
	register_sidebar(
		array(
			'name'          => __( 'Footer Column 1', 'thunderblog' ),
			'id'            => 'footer-1',
			'description'   => __( 'Appears on the first footer column.', 'thunderblog' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer Column 2', 'thunderblog' ),
			'id'            => 'footer-2',
			'description'   => __( 'Appears on the second footer column.', 'thunderblog' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer Column 3', 'thunderblog' ),
			'id'            => 'footer-3',
			'description'   => __( 'Appears on the third footer column.', 'thunderblog' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'thunderblog_register_footer_widgets', 20 );

// custom comment template
function thunderblog_comment ( $comment, $args, $depth ) {
	?>
	<div class="comment" id="comment-<?php comment_ID(); ?>">
		<div class="avatar">
			<?php if ( $args['avatar_size'] != 0 ) : ?>
				<?php echo get_avatar( $comment, $args['avatar_size'] ); ?>
			<?php endif; ?>
		</div>
		<h3 class="comment-meta">
			<cite><?php echo get_comment_author(); ?></cite>
			<?php _e( 'wrote on', 'thunderblog' ); ?>
			<time>
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
					<?php
					/* translators: 1: date, 2: time */
					printf( __( '%1$s at %2$s' ), get_comment_date(), get_comment_time() );
					?>
				</a>
			</time>
			<span class="ml-auto"><?php echo edit_comment_link( __( 'Edit', 'thunderblog' ) ); ?></span>
		</h3>
		<blockquote>
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php _e( 'Your comment is awaiting moderation.', 'thunderblog' ); ?></em>
		<?php endif; ?>
		<?php comment_text(); ?>
		<?php
			echo comment_reply_link(
				array_merge(
					$args, 
					array(
						'depth'     => $depth,
						'max_depth' => $args['max_depth'],
					)
				)
			);
		?>
		</blockquote>
	<?php
}

// customize customizer to add theme options
function thunderblog_customize_register ( $wp_customize ) {
	// custom download link
	$wp_customize->add_setting( 'download_url' );
	$wp_customize->add_control(
		'download_url',
		array(
			'label'   => __( 'Download URL' ),
			'type'    => 'url',
			'section' => 'title_tagline',
		)
	);
	// custom donation link
	$wp_customize->add_setting( 'donation_url' );
	$wp_customize->add_control(
		'donation_url',
		array(
			'label'   => __( 'Donation URL' ),
			'type'    => 'url',
			'section' => 'title_tagline',
		)
	);
}

/**
 * Adds the featured image (if any) to the (rss/atom/whatever) feed.
 *
 * @param string $text
 *
 * @return string
 */
function thunderblog_add_featured_image_to_feed( string $text ): string {
	global $post;

	// No featured image? Skip!
	if ( ! has_post_thumbnail( $post ) ) {
		return $text;
	}

	$featured_image = get_the_post_thumbnail( $post, [ 640, 360 ] );

	return "<p>{$featured_image}</p>{$text}";
}

/**
 * Echo's out a link entry containing the posts featured image, and caption if available.
 * @return void
 */
function thunderblog_output_featured_image_as_link() {
	global $post;

	// No featured image? Skip!
	if ( ! has_post_thumbnail( $post ) ) {
		return;
	}

	$featured_image   = get_the_post_thumbnail_url( $post );
	$featured_caption = get_the_post_thumbnail_caption( $post ) ?? $post->post_title;

	echo "<link rel='thumbnail' href='{$featured_image}' title='{$featured_caption}' />";
}

add_action( 'customize_register', 'thunderblog_customize_register' );

add_filter( 'the_content_feed', 'thunderblog_add_featured_image_to_feed' );
add_filter( 'atom_entry', 'thunderblog_output_featured_image_as_link' );

add_action( 'wp_enqueue_scripts', function () {
	// load styles
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/normalize.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri(), [], THUNDERBLOG_VERSION );

	// load scripts
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/main.js', [], THUNDERBLOG_VERSION, true );
} );
