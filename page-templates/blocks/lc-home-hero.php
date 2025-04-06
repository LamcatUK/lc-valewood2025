<?php
/**
 * LC Home Hero Block
 *
 * @package lc-valewood2025
 *
 * @var array $block The block settings and attributes.
 * @var string $content The block inner content (if any).
 * @var bool $is_preview True during AJAX preview.
 * @var int|string $post_id The post ID this block is saved to.
 */

defined( 'ABSPATH' ) || exit;

$images      = get_field( 'images' );
$heading     = get_field( 'heading' );
$strapline   = get_field( 'strapline' );
$button_link = get_field( 'button_link' );

if ( ! $images ) {
	return;
}

$block_id = 'lc-home-hero-' . $block['id'];
?>

<section id="<?= esc_attr( $block_id ); ?>" class="lc-home-hero position-relative">
	<div id="<?= esc_attr( $block_id ); ?>-carousel" class="carousel slide h-100" data-bs-ride="carousel">
		<div class="carousel-inner h-100">
			<?php
			foreach ( $images as $index => $image ) {
				?>
				<div class="carousel-item h-100<?= 0 === $index ? ' active' : ''; ?>">
					<?=
					wp_get_attachment_image(
						$image['ID'],
						'full',
						false,
						array(
							'class' => 'd-block w-100 h-100 object-fit-cover',
							'style' => 'object-position: center;',
						),
					);
					?>
				</div>
				<?php
			}
			?>
		</div>
		<?php
		if ( count( $images ) > 1 ) {
			?>
		<div class="carousel-indicators">
			<?php
			foreach ( $images as $index => $_ ) {
				?>
				<button type="button"
				        data-bs-target="#<?= esc_attr( $block_id ); ?>-carousel"
				        data-bs-slide-to="<?= esc_attr( $index ); ?>"
						class="<?= 0 === $index ? 'active' : ''; ?>"
						aria-current="<?= 0 === $index ? 'true' : 'false'; ?>"
						aria-label="Slide <?= esc_html( $index + 1 ); ?>"></button>
				<?php
			}
			?>
		</div>
			<?php
		}
		?>
	</div>

	<div class="overlay"></div>

	<div class="lc-home-hero__overlay position-absolute top-50 start-50 translate-middle text-center text-white px-3" data-aos="fade">
		<h1><div class="lc-home-hero__title"><?= esc_html( $heading ); ?></div>
		<p class="lc-home-hero__strapline"><?= esc_html( $strapline ); ?></p></h1>
		<div class="lc-home-hero__buttons">
			<?php
			if ( $button_link ) {
				?>
			<a class="button button-primary lc-home-hero__button mt-3"
				href="<?= esc_url( $button_link['url'] ); ?>"
				target="<?= esc_attr( $button_link['target'] ?? '_self' ); ?>">
				<?= esc_html( $button_link['title'] ); ?>
			</a>
				<?php
			}
			echo do_shortcode( '[contact_phone class="button button-primary mt-3" icon=true text="Call Us"]' );
			?>
		</div>
	</div>
</section>
