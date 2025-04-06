<?php
/**
 * Block template for LC Location.
 *
 * @package lc-valewood2025
 */

$intro       = get_field( 'intro' );
$usp_heading = get_field( 'usp_heading' );
$usp_content = get_field( 'usp_content' );

?>
<div class="container py-5">
	<div class="fs-500 mb-5"><?= wp_kses_post( $intro ); ?></div>
	<h2 class="h3 text--sage-500 section-heading w-constrained--sm mx-auto" data-aos="fade-up"><?= esc_html( $usp_heading ); ?></h2>
	<div class="row g-5 justify-content-center">
		<?php
		$field     = strip_tags( $usp_content, '<br />' );
		$usps      = preg_split( "/\r\n|\n|\r/", $field );
		$aos_delay = 0;
		foreach ( $usps as $b ) {
			if ( '' === $b ) {
				continue;
			}
			?>
			<div class="col-md-4" data-aos="fade-up" data-aos-delay="<?= esc_attr( $aos_delay ); ?>">
				<div class="location-card">
					<i class="fa-solid fa-check text--sage-500"></i>
					<p><?= wp_kses_post( $b ); ?></p>
				</div>
			</div>
			<?php
			$aos_delay += 200; // Increment delay for each block.
		}
		?>
	</div>
</div>