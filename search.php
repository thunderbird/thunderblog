<?php
/**
 * The search results template file
 *
 * lists all posts matching the search query
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */
?>

<?= get_header() ?>

<main>
	<h2 class="text-center">
		<?php
			printf(
				esc_html(
					_n('%d result found for', '%d results found for', (int) $wp_query->found_posts, 'thunderblog')
				),
				(int) $wp_query->found_posts
			); ?>
		<?= '&laquo;' ?><?= get_search_query() ?><?= '&raquo;' ?>
	</h2>
	<section class="articles">
		<?= get_template_part('parts/post-list') ?>
	</section>
</main>

<?= get_footer() ?>
