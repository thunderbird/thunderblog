<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * lists all posts in requested category
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */
?>

<?= get_header() ?>

<main class="page">
	<h1 class="text-center"><?= the_title() ?></h1>
	<section class="content">
		<?= get_the_content() ?>
		<?php if ( comments_open() || get_comments_number() ) comments_template(); ?>
	</section>
</main>

<?= get_footer() ?>
