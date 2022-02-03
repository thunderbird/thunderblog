<?php
/**
 * The single post template file
 *
 * shows the actual post
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */
?>

<?php get_header(); ?>

<main class="post">
	<?php
	// iterate over all available posts
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			?>
			<?php if ( has_post_thumbnail() ) : ?>
				<img class="title-image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="featured post title image">
			<?php endif; ?>
			<section class="content">
				<?php the_category(); ?>
				<?php the_title( '<h1>', '</h1>' ); ?>
				<?php get_template_part('parts/post-meta'); ?>
				<?php the_content(); ?>
				<?php get_template_part('parts/post-tags'); ?>
			</section>
			<?php get_template_part('parts/post-social'); ?>
			<section class="comments">
				<h2>
					<?php echo get_comments_number(); ?>
					<?php echo get_comments_number() === 1 ? _e( 'response', 'thunderblog' ) : _e( 'responses', 'thunderblog' ); ?>
				</h2>
				<?php
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					?>
			</section>
			<?php
		}
	} else {
		_e( 'The post is not available.', 'thunderblog' );
	} ?>
</main>

<?php get_footer(); ?>
