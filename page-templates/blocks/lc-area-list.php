<?php
/**
 * Block template for LC Area List.
 *
 * @package lc-valewood2025
 */

$parent_id   = get_the_ID();
$child_pages = get_pages(
	array(
		'child_of'    => $parent_id,
		'sort_column' => 'menu_order',
		'sort_order'  => 'ASC',
	)
);

if ( empty( $child_pages ) ) {
	return;
}

?>
<div class="container">
	<h2 class="h3 text-primmary-500 section-heading" data-aos="fade-up"><?= esc_html( get_field( 'title' ) ); ?></h2>
	<div class="row g-5">
		<?php
		$aos_delay = 100;
		foreach ( $child_pages as $index => $child_page ) {
			if ( 0 < $index && 0 === $index % 3 ) {
				$aos_delay = 0; // Reset delay for each new row.
			}
			?>
			<div class="col-md-4 text-center" data-aos="fade" data-aos-delay="<?= esc_attr( $aos_delay ); ?>">
				<a href="<?= esc_url( get_permalink( $child_page->ID ) ); ?>" class="fs-500 noline">
					<?= esc_html( $child_page->post_title ); ?>
				</a>
			</div>
			<?php
			$aos_delay += 200; // Increment delay for each block.
		}
		?>
		</div>
	</div>
</div>
