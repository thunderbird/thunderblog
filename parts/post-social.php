<?php
/**
 * Displays share buttons for social networks (Twitter, LinkedIn) for a post.
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */
?>

<section class="social" id="c">
	<!-- Mail -->
	<a
		href="mailto:?subject=<?php echo get_the_title() ?>&body=<?php echo get_the_excerpt() ?> <?php echo get_permalink() ?>"
		class="social-mail"
		target="_blank"
		title="<?php _e( 'Share this article via email', 'thunderblog' ); ?>"
		aria-label="<?php _e( 'Share this article via email', 'thunderblog' ); ?>"
	>
		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-m" viewBox="0 0 24 24">
			<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
			<rect x="3" y="5" width="18" height="14" rx="2" />
			<polyline points="3 7 12 13 21 7" />
		</svg>
	</a>
	<!-- Twitter -->
	<a
		href="https://twitter.com/intent/tweet?original_referer=<?php echo urlencode( get_site_url() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>&url=<?php echo urlencode(get_permalink()) ?>&via=mozthunderbird"
		class="social-twitter"
		target="_blank"
		title="<?php _e( 'Share this article on Twitter', 'thunderblog' ); ?>"
		aria-label="<?php _e( 'Share this article on Twitter', 'thunderblog' ); ?>"
	>
		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-m" viewBox="0 0 24 24">
			<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
			<path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
		</svg>
	</a>
	<!-- LinkedIn -->
	<a
		href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode( get_permalink() ); ?>"
		class="social-linkedin"
		target="_blank"
		title="<?php _e( 'Share this article on LinkedIn', 'thunderblog' ); ?>"
		aria-label="<?php _e( 'Share this article on LinkedIn', 'thunderblog' ); ?>"
	>
		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-m" viewBox="0 0 24 24">
			<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
			<rect x="4" y="4" width="16" height="16" rx="2" />
			<line x1="8" y1="11" x2="8" y2="16" />
			<line x1="8" y1="8" x2="8" y2="8.01" />
			<line x1="12" y1="16" x2="12" y2="11" />
			<path d="M16 16v-3a2 2 0 0 0 -4 0" />
		</svg>
	</a>
</section>
