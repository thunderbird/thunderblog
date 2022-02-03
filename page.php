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

<?php get_header(); ?>

<main class="page">
	<h1 class="text-center"><?php the_title() ?></h1>
	<section class="content">
		<?php the_content() ?>
		<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		?>
	</section>
</main>

<?php get_footer(); ?>
