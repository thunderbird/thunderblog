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

<?= get_header() ?>

<main>
	<section class="featured">
		<?php 
			$latest_posts = get_posts(['numberposts' => 1]);
			$post = count($latest_posts) > 0 ? $latest_posts[0] : null;
		?>
		<?php if ($post): ?>
			<article>
				<div class="content">
					<span class="category"><?= _e('Latest Post', 'thunderblog') ?></span>
					<a class="title" href="<?= get_permalink($post) ?>">
						<h1><?= $post->post_title ?></h1>
					</a>
					<?= get_template_part('parts/post-meta', null, ['author' => $post->post_author]) ?>
					<div class="description"><?= get_the_excerpt($post) ?></div>
					<a class="btn btn-neutral-light" href="<?= get_permalink($post) ?>"><?= _e('Read more', 'thunderblog') ?></a>
				</div>
				<?php if (has_post_thumbnail($post)): ?>
					<img class="show-xl" src="<?= get_the_post_thumbnail_url($post) ?>" alt="featured article title image">
				<?php endif; ?>
			</article>
		<?php endif; ?>
	</section>
	<h2 class="text-center"><?php _e('Latest Posts', 'thunderblog'); ?></h2>
	<section class="articles">
		<?php get_template_part('parts/post-list') ?>
	</section>
</main>

<?= get_footer() ?>
