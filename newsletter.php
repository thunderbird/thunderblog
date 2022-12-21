<?php
/**
 * The newsletter template page. Should only be used by the newsletter WordPress page.
 *
 * Template Name: Newsletter Page
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
				<?php the_content(); ?>
                <!-- Begin Mailchimp Signup Form -->
                <div id="mc_embed_signup">
                    <form action="https://thunderbird.us12.list-manage.com/subscribe/post?u=f8051cc8637cf3ff79661f382&amp;id=56428f2efc&amp;f_id=00bbfee0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self">
                        <div id="mc_embed_signup_scroll">
                            <div class="mc-field-group">
                                <label for="mce-EMAIL"><?php _e('Email Address') ?></label>
                                <div class="newsletter-signup">
                                    <input type="email" value="" name="EMAIL" class="required email input-newsletter" id="mce-EMAIL" required>
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary btn-newsletter">
                                </div>
                                <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f8051cc8637cf3ff79661f382_56428f2efc" tabindex="-1" value=""></div>
                        </div>
                    </form>

                    <p><a href="https://us12.campaign-archive.com/home/?u=f8051cc8637cf3ff79661f382&id=56428f2efc" title="View previous campaigns"><?php _e('View previous campaigns.')?></a></p>
                </div>
                <!--End mc_embed_signup-->
			</section>
			<?php
		}
	} else {
		_e( 'The post is not available.', 'thunderblog' );
	} ?>
</main>

<?php get_footer(); ?>
