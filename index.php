<?php
/**
 * The main template file
 *
 * Bringing header, content and footer together.
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */
?>

<?php get_header(); ?>

<main>
	<section class="featured">
	<?php 
		$sticky = get_option( 'sticky_posts' );
		$latest_posts = get_posts( array( 'numberposts' => 1, 'include' => $sticky ) );
		$post = count( $latest_posts ) > 0 ? $latest_posts[0] : null;
	?>
	<?php if ( $post ) : ?>
		<article>
			<div class="content">
				<span class="category"><?php _e( isset( $sticky[0] ) ? 'Featured Post' : 'Latest Post', 'thunderblog' ); ?></span>
				<a class="title" href="<?php the_permalink( $post ); ?>">
					<h1><?php echo $post->post_title; ?></h1>
				</a>
				<?php get_template_part( 'parts/post-meta', null, array( 'author' => $post->post_author) ); ?>
				<div class="description"><?php the_excerpt( $post ) ?></div>
				<a class="btn btn-neutral-light" href="<?php the_permalink( $post ); ?>"><?php _e( 'Read more', 'thunderblog' ); ?></a>
			</div>
			<?php if ( has_post_thumbnail( $post ) ) : ?>
				<img class="d-init-xl" src="<?php echo get_the_post_thumbnail_url( $post ); ?>" alt="featured article title image">
			<?php endif; ?>
		</article>
	<?php endif; ?>
	</section>
	<h2 class="text-center"><?php _e( 'Latest Posts', 'thunderblog' ); ?></h2>
	<section class="articles">
		<?php get_template_part( 'parts/post-list' ); ?>
	</section>
	<?php get_template_part( 'parts/post-pagination' ); ?>
</main>

<?php get_footer(); ?>
