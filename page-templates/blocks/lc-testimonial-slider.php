<?php
/**
 * Block template for LC Testimonial Slider.
 *
 * @package lc-valewood2025
 */

defined( 'ABSPATH' ) || exit;

$GLOBALS['skip_core_block_wrapping'] = true;

?>
<section class="section-testimonials">
	<div class="container">
		<h2 class="h2 ff-heading text--sage-400 text-center" data-aos="fade">What our clients say</h2>

		<div class="splide testimonial-slider" role="region" aria-label="Client testimonials">
			<div class="splide__track">
				<ul class="splide__list">
					<?php
					$testimonials = new WP_Query(
						array(
							'post_type'      => 'testimonials',
							'posts_per_page' => 6,
							'orderby'        => 'date',
							'order'          => 'DESC',
						)
					);

					if ( $testimonials->have_posts() ) {
						while ( $testimonials->have_posts() ) {
							$testimonials->the_post();
							$client  = get_the_title();
							$content = get_the_content();
							$cleaned = wpautop( $content );
							?>
							<li class="splide__slide">
								<blockquote class="testimonial-card">
									<div class="testimonial-quote">
										<div class="testimonial-text">
											<?php echo wp_kses_post( $cleaned ); ?>
										</div>
										<div class="testimonial-author">
											— <?php echo esc_html( $client ); ?>
										</div>
									</div>
								</blockquote>
							</li>
							<?php
						}
						wp_reset_postdata();
					}
					?>
				</ul>
			</div>
		</div>

		<div class="text-center mt-4">
			<a href="/testimonials" class="button button-outline button--arrow">Read more testimonials</a>
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
	new Splide('.testimonial-slider', {
		type: 'fade',
		perPage: 1,
		perMove: 1,
		pagination: false,
		arrows: true,
		autoplay: true,
		interval: 8000,
		speed: 1000,
		rewind: true,
		easing: 'ease',
	}).mount();
});
</script>
		<?php
	}
);

$GLOBALS['skip_core_block_wrapping'] = false;