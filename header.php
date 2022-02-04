<?php
/**
 * The header.
 *
 * Displays all of the <head> section and everything up until main.
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/ios-icon-180.png" />
	<link rel="icon" type="image/png" sizes="196x196" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon-196.png" />
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon.ico" />
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<?php get_template_part('parts/logo'); ?>
		<nav class="d-init-xl">
			<?php get_template_part('parts/nav'); ?>
		</nav>
		<button class="btn btn-icon btn-flat search ml-auto" id="search" aria-label="<?php _e( 'Search', 'thunderblog' ); ?>">
			<svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24">
				<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
				<circle cx="10" cy="10" r="7" />
				<line x1="21" y1="21" x2="15" y2="15" />
			</svg>
		</button>
		<div class="actions d-flex-m">
			<?php if ( get_theme_mod( 'download_url' ) ) : ?>
			<a class="btn btn-primary" href="<?php echo get_theme_mod('download_url'); ?>" target="_blank">
				<span class="d-flex-l gap-05">
					<?php _e('Download', 'thunderblog'); ?>
					<span class="d-init-xxl">Thunderbird</span>
				</span>
				<svg xmlns="http://www.w3.org/2000/svg" class="icon d-none-l" viewBox="0 0 24 24">
					<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
					<path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
					<polyline points="7 11 12 16 17 11" />
					<line x1="12" y1="4" x2="12" y2="16" />
				</svg>
			</a>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'donation_url' ) ) : ?>
			<a class="btn btn-love" href="<?php echo get_theme_mod('donation_url'); ?>" target="_blank">
				<span class="d-flex-l"><?php _e('Donate', 'thunderblog'); ?></span>
				<svg xmlns="http://www.w3.org/2000/svg" class="icon d-none-l" viewBox="0 0 24 24">
					<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
					<path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
				</svg>
			</a>
			<?php endif; ?>
		</div>
		<div class="mobile-menu d-none-xl" id="mobile-menu">
			<svg xmlns="http://www.w3.org/2000/svg" class="icon open" viewBox="0 0 24 24">
				<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
				<line x1="4" y1="6" x2="20" y2="6" />
				<line x1="4" y1="12" x2="20" y2="12" />
				<line x1="4" y1="18" x2="20" y2="18" />
			</svg>
			<svg xmlns="http://www.w3.org/2000/svg" class="icon close" viewBox="0 0 24 24">
				<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
				<line x1="18" y1="6" x2="6" y2="18" />
				<line x1="6" y1="6" x2="18" y2="18" />
			</svg>
		</div>
	</header>
	<form
		role="search"
		class="search-form <?php echo get_search_query() ? 'active' : ''; ?>"
		id="search-form"
		method="get"
		action="<?php echo esc_url( home_url( '/' ) ); ?>"
	>
		<input type="search" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php _e('Search&hellip;', 'thunderblog'); ?>" required />
		<button type="submit" class="btn btn-neutral"><?php _e( 'Search', 'thunderblog' ); ?></button>
	</form>
	<nav id="mobile" class="mobile-nav">
		<?php get_template_part('parts/nav'); ?>
		<div class="actions d-none-m">
			<a class="btn btn-primary btn-icon" href="https://www.thunderbird.net/download/" target="_blank">
				<svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24">
					<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
					<path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
					<polyline points="7 11 12 16 17 11" />
					<line x1="12" y1="4" x2="12" y2="16" />
				</svg>
				<span><?php _e( 'Download', 'thunderblog' ); ?> Thunderbird</span>
			</a>
			<a class="btn btn-love btn-icon" href="https://give.thunderbird.net" target="_blank">
				<svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24">
					<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
					<path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
				</svg>
				<span><?php _e( 'Donate', 'thunderblog' ); ?></span>
			</a>
		</div>
	</nav>
