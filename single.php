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

<?= get_header() ?>

<main class="post">

<?php
// iterate over all available posts
if (have_posts()) {
	while (have_posts()) {
		the_post(); ?>
		<?php if (has_post_thumbnail()): ?>
			<img class="title-image" src="<?= get_the_post_thumbnail_url() ?>" alt="featured post title image">
		<?php endif; ?>
		<section class="content">
			<?= the_category(); ?>
			<h1><?= the_title(); ?></h1>
			<?= get_template_part('parts/post-meta') ?>
			<?= get_the_content() ?>
		</section>
		<?= get_template_part('parts/post-social') ?>
		<section class="comments">
			<h2>
			<?= get_comments_number() ?>
			<?= get_comments_number() == 1 ? _e('response', 'thunderblog') :  _e('responses', 'thunderblog') ?>
			</h2>
		</section>
		<?php
	}
} else {
	_e('The post is not available.', 'thunderblog');
} ?>

</main>

<?= get_footer(); ?>
