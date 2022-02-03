<?php
/**
 * The category template file
 *
 * lists all posts in requested category
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */
?>

<?php get_header(); ?>

<main>
	<h2 class="text-center">
		<?php _e( 'Posts in', 'thunderblog' ); ?>
		&laquo;<?php single_cat_title(); ?>&raquo;
	</h2>
	<section class="articles">
		<?php get_template_part( 'parts/post-list' ); ?>
	</section>
	<?php get_template_part( 'parts/post-pagination' ); ?>
</main>

<?php get_footer(); ?>
