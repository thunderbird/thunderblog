<?php
// iterate over all available posts
if (have_posts()) {
	while (have_posts()) {
		the_post(); ?>
		<article>
			<?php if (has_post_thumbnail()): ?>
				<div class="thumb" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);"></div>
			<?php endif; ?>
			<?php the_category(); ?>
			<a href="<?= get_permalink(); ?>">
				<h3><?php the_title(); ?></h3>
			</a>
			<div class="summary"><?php the_excerpt(); ?></div>
			<a class="btn btn-link" href="<?= get_permalink(); ?>"><?php _e('Read more', 'thunderblog'); ?></a>
		</article>
		<?php
	}
} else {
	echo 'No posts available';
}
