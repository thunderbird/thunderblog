<?php
/**
 * Displays pagination links for post lists.
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */
?>

<nav class="pagination">
	<?php echo previous_posts_link( __( '&laquo; Newer posts', 'thunderblog' ) ); ?>
	<?php echo next_posts_link( __( 'Older posts &raquo;', 'thunderblog' ) ); ?>
</nav>
