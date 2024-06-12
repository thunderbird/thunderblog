<?php
/**
 * Displays the linked logo brand.
 * A custom logo can be set via customizer > site identity > logo.
 * If no custom logo is set, a default logo from assets will be used.
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */

?>

<?php if ( has_custom_logo() ) : ?>
		<?php the_custom_logo(); ?>
<?php else: ?>
<a class="logo" href="<?php echo site_url(); ?>">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/thunderbird_logo.svg" alt="Logo" />
</a>
<?php endif; ?>