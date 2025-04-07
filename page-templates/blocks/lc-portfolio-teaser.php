<?php
/**
 * Block template for LC Portfolio Teaser.
 *
 * @package lc-valewood2025
 */

defined( 'ABSPATH' ) || exit;
?>
<section class="section-featured-projects">
 	<div class="container">
		<div class="projects-header text-center mb-4" data-aos="fade-up">
			<h2 class="text--primary-500 section-heading"><?= esc_html( get_field( 'title' ) ); ?></h2>
			<p class="lead text--grey-400"><?= wp_kses_post( get_field( 'intro' ) ); ?></p>
		</div>

		<div class="splide projects-slider" role="region" aria-label="Featured bathroom projects" data-aos="fade">
			<div class="splide__track">
				<ul class="splide__list">
				<?php

				$projects = get_field( 'images' );

				foreach ( $projects as $project ) {
					?>
					<li class="splide__slide">
					<?= wp_get_attachment_image( $project, 'large' ); ?>
					</li>
					<?php
				}
				?>
				</ul>
			</div>
		</div>

		<div class="text-center mt-4">
			<a href="/portfolio/" class="button button-outline button--arrow">View All Projects</a>
		</div>
 	</div>
</section>
<?php
add_action(
	'wp_footer',
	function () {
		?>
<script>
document.addEventListener('DOMContentLoaded', function () {
	new Splide('.projects-slider', {
		type: 'loop',
		perPage: 3,
		breakpoints: {
			767: {
				perPage: 1
			},
			1024: {
				perPage: 2
			}
		},
		gap: '1.5rem',
		pagination: false,
		arrows: false,
		autoplay: true,
		interval: 6000,
	}).mount();
});
</script>
		<?php
	}
);