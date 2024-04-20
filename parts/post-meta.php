<?php
/**
 * Displays meta data (date, author, number of responses) for a post.
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */
?>

<div class="meta">
	<time>
		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-s" viewBox="0 0 24 24">
			<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
			<rect x="4" y="5" width="16" height="16" rx="2" />
			<line x1="16" y1="3" x2="16" y2="7" />
			<line x1="8" y1="3" x2="8" y2="7" />
			<line x1="4" y1="11" x2="20" y2="11" />
			<rect x="8" y="15" width="2" height="2" />
		</svg>
		<?php echo get_the_date(); ?>
	</time>
	<span>
		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-s" viewBox="0 0 24 24">
			<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
			<circle cx="12" cy="7" r="4" />
			<path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
		</svg>
		<?php function_exists( 'coauthors_posts_links' ) ? coauthors_posts_links() : the_author_posts_link(); ?>
	</span>
	<a class="responses" href="<?php echo rtrim( the_permalink(), '/' ); ?>#c">
		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-s" viewBox="0 0 24 24">
			<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
			<path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10" />
			<path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2" />
		</svg>
		<?php echo get_comments_number(); ?>
		<?php echo get_comments_number() === 1 ? _e( 'response', 'thunderblog' ) :  _e( 'responses', 'thunderblog' ); ?>
	</a>
</div>
