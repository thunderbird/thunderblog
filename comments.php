<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

if ( have_comments() ) :
	echo wp_list_comments(
		array(
			'style'       => 'div',
			'avatar_size' => 64,
			'short_ping'  => true,
			'callback'    => 'thunderblog_comment',
		)
	);
	
	if ( ! comments_open() ) :
		?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'thunderblog' ); ?></p>
		<?php
	endif;
endif;

echo comment_form(
	array(
		'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="btn %3$s">%4$s</button>',
	)
);
?>
