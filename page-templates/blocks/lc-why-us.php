<?php
/**
 * Block template for LC Why Us.
 *
 * @package lc-valewood2025
 */

defined( 'ABSPATH' ) || exit;
?>
<section class="section-why-choose">
	<div class="container text-center">
		<h2 class="text--sage-500 section-heading" data-aos="fade"><?= esc_html( get_field( 'title' ) ); ?></h2>
		<div class="benefit-grid">
			<?php
			$c = 0;
			while ( have_rows( 'benefits' ) ) {
				the_row();
				$icon        = get_sub_field( 'icon' );
				$benefit     = get_sub_field( 'title' );
				$description = get_sub_field( 'description' );
				?>
				<div class="benefit-card" data-aos="fade-up" data-aos-delay="<?= esc_attr( $c * 100 ); ?>">
					<i class="fa-solid <?= esc_html( $icon ); ?> benefit-icon"></i>
					<h3 class="fs-500 fw-600"><?= esc_html( $benefit ); ?></h3>
					<p><?= esc_html( $description ); ?></p>
				</div>
				<?php
				++$c;
			}
			?>
		</div>
 	</div>
</section>
