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
	<?= previous_posts_link(__('&laquo; Newer posts', 'thunderblog')); ?>
	<?= next_posts_link(__('Older posts &raquo;', 'thunderblog')); ?>
</nav>
