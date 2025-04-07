<?php
/**
 * Block template for LC Services.
 *
 * @package lc-valewood2025
 */

defined( 'ABSPATH' ) || exit;
?>
<section class="section-services">
	<div class="container">
   		<h2 class="text--primary-500 section-heading"><?= esc_html( get_field( 'title' ) ); ?></h2>
		<div class="services-grid">
			<?php
			$c = 0;
			while ( have_rows( 'services' ) ) {
				the_row();
				$icon        = get_sub_field( 'service_icon' );
				$service     = get_sub_field( 'service_name' );
				$description = get_sub_field( 'service_description' );
				$target      = get_sub_field( 'service_target' );
				?>
			<a href="<?= esc_url( $target['url'] ); ?>" class="service-card-wrapper" data-aos="fade" data-aos-delay="<?= esc_attr( $c * 100 ); ?>">
				<div class="service-card">
					<div class="service-icon"><i class="fa-solid <?= esc_attr( $icon ); ?>"></i></div>
					<div>
						<h3 class="h5 text--dark"><?= esc_html( $service ); ?></h3>
						<p class="fs-400 text--grey-400"><?= esc_html( $description ); ?></p>
					</div>
				</div>
			</a>
				<?php
				++$c;
			}
			?>
		</div>
	</div>
</section>
