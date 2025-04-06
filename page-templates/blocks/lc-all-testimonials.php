<?php
/**
 * Block template for LC All Testimonials.
 *
 * @package lc-valewood2025
 */

$testimonials = new WP_Query(
	array(
		'post_type'      => 'testimonials',
		'posts_per_page' => -1,
		'orderby'        => 'rand',
	)
);

if ( $testimonials->have_posts() ) {
	?>
	<div class="container py-5 testimonials">
		<div class="row g-5">
				<?php
				while ( $testimonials->have_posts() ) {
					$testimonials->the_post();
					$client  = get_the_title();
					$content = get_the_content();
					$cleaned = wpautop( $content );
					?>
			<div class="col-md-6">
				<blockquote class="testimonial-card">
					<div class="testimonial-quote">
						<div class="testimonial-text">
							<?php echo wp_kses_post( $cleaned ); ?>
						</div>
						<div class="testimonial-author fw-700 text--sage-500">
							— <?php echo esc_html( $client ); ?>
						</div>
					</div>
				</blockquote>
			</div>
					<?php
				}
				wp_reset_postdata();
				?>
		</div>
	</div>
	<?php
}