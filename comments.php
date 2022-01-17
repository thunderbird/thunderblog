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
if (post_password_required()) return;

if (have_comments()): ?>
	<?= wp_list_comments([
		'style'       => 'div',
		'avatar_size' => 64,
		'short_ping'  => true,
		'callback'    => 'thunderblog_comment'
	]) ?>

	<?php if (!comments_open()): ?>
		<p class="no-comments"><?= _e('Comments are closed.', 'thunderblog') ?></p>
	<?php endif; ?>
<?php endif; ?>

<?= comment_form([
	'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="btn %3$s">%4$s</button>',
]) ?>
