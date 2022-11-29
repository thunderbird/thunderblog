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
	<?php 
		the_posts_pagination( array(
			'mid_size'  => 2,
			'prev_text' => __( '&laquo; Newer posts', 'thunderblog' ),
			'next_text' => __( 'Older posts &raquo;', 'thunderblog' ),
		) );
	?>
</nav>
