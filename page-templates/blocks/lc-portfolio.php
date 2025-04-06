<?php
/**
 * Block template for LC Portfolio.
 *
 * @package lc-valewood2025
 */

defined( 'ABSPATH' ) || exit;

// Get ACF gallery field.
$image_ids = get_field( 'gallery' );

?>
<div class="container py-5">
	<div class="masonry-gallery row" data-masonry='{ "itemSelector": ".masonry-item", "columnWidth": ".masonry-sizer", "percentPosition": true }'>
		<div class="masonry-sizer col-12 col-md-6 col-lg-4"></div>
		<?php
		foreach ( $image_ids as $image_id ) {
			$image_url = wp_get_attachment_image_url( $image_id, 'large' );
			?>
			<div class="masonry-item col-12 col-md-6 col-lg-4">
				<a href="<?php echo esc_url( $image_url ); ?>" class="glightbox">
					<?php echo wp_get_attachment_image( $image_id, 'large', false, array( 'class' => 'img-fluid' ) ); ?>
				</a>
			</div>
			<?php
		}
		?>
	</div>
</div>
<?php
add_action(
	'wp_footer',
	function () {
		?>
<script>
	document.addEventListener('DOMContentLoaded', function () {
		// Initialize Masonry after images are loaded
		var grid = document.querySelector('.masonry-gallery');
		var msnry;
		imagesLoaded(grid, function () {
			msnry = new Masonry(grid, {
				itemSelector: '.masonry-item',
				columnWidth: '.masonry-sizer',
				percentPosition: true
			});
		});

		// Initialize GLightbox
		const lightbox = GLightbox({
			selector: '.glightbox'
		});
	});
</script>
		<?php
	},
	100
);