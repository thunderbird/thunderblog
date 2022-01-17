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
	<h1 class="text-center"><?= _e('Well, this is embarrassing&hellip;', 'thunderblog') ?></h1>
	<section class="content">
		<h2><?= _e('We hate to say it, but we couldn\'t find the page or file you\'re looking for.', 'thunderblog') ?></h2>
		<p>
			<?= _e('If you typed in the address, try double-checking the spelling.', 'thunderblog') ?>
		</p>
		<p>
			<?= _e('If you followed a link from somewhere, please let us know at webmaster at mozilla dot com. Be sure to tell us where you came from and what you were looking for, and we\'ll do our best to fix it.</p>', 'thunderblog') ?>
		</p>
	</section>
</main>

<?= get_footer() ?>
