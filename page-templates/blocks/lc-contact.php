<?php
/**
 * Block template for LC Contact.
 *
 * @package lc-valewood2025
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="container py-5">
	<div class="row g-5">
		<div class="col-md-4">
			<h2 class="h4 text--primary-500 fw-700 section-heading--start">Prefer to speak to someone first?</h2>
			<p class="lead">You can reach us using the details below — we're always happy to chat about your ideas, answer questions, or arrange a free design consultation.</p>
			<ul class="fa-ul fs-450">
				<li><span class="fa-li"><i class="fa-solid fa-phone text--primary-500"></i></span> <?= do_shortcode( '[contact_phone class="noline fw-700"]' ); ?></li>
				<li><span class="fa-li"><i class="fa-solid fa-envelope text--primary-500"></i></span> <?= do_shortcode( '[contact_email class="noline fw-700"]' ); ?></li>
			</ul>
		</div>
		<div class="col-md-8">
			<?= do_shortcode( '[contact-form-7 id="bfdd4ca"]' ); ?>
		</div>
	</div>
</div>