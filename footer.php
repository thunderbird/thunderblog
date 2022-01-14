<?php
/**
 * The footer.
 *
 * Displays everything after main.
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */

?>
	<footer>
		<?php get_template_part('parts/logo'); ?>
		<div class="columns">
			<section>
				<h4>Thunderbird</h4>
				<ul>
					<li>About</li>
					<li>Download</li>
					<li>Features</li>
					<li>Beta, Nightly</li>
				</ul>
			</section>
			<section>
				<h4>Ressourcen</h4>
				<ul>
					<li>Privacy Hub</li>
					<li>Email Client Comparison</li>
					<li>Brand Standards</li>
				</ul>
			</section>
			<section>
				<h4>Contact</h4>
				<ul>
					<li>Contact Us</li>
					<li>Donate</li>
					<li>Follow @Thunderbird</li>
					<li>Follow @Mozilla</li>
				</ul>
			</section>
		</div>
		<hr />
		<div class="columns">
			<section>
				<ul class="inline">
					<li>Website Privacy Notice</li>
					<li>Cookies</li>
					<li>Legal</li>
				</ul>
			</section>
		</div>
	</footer>
	<script>
		// toggle search form
		const searchTrigger = document.querySelector('#search');
		const searchForm = document.querySelector('#search-form');
		searchTrigger.addEventListener('click', () => {
			searchForm.classList.toggle('active');
		});
		// toggle mobile menu
		const mobileTrigger = document.querySelector('#mobile-menu');
		const mobileNav = document.querySelector('#mobile');
		mobileTrigger.addEventListener('click', () => {
			mobileNav.classList.toggle('active');
			mobileTrigger.classList.toggle('active');
		});
	</script>
	<?php wp_footer(); ?>
</body>
</html>
