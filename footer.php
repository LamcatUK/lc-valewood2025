<?php
/**
 * Footer template for the Valewood Bathrooms theme.
 *
 * @package lc-valewood2025
 */

defined( 'ABSPATH' ) || exit;
?>
<footer class="footer pt-5">
    <div class="container">
        <div class="row gx-4 g-lg-2 g-xxl-5">
            <div class="col-xl-3 text-center mb-3 pe-3">
                <img src="<?= esc_url( get_stylesheet_directory_uri() ); ?>/img/valewood-logo.svg" alt="Valewood Bathrooms" class="footer__logo">
                <p class="footer__tagline">Serving West Sussex with timeless bathroom design</p>
            </div>
            <div class="col-sm-6 col-xl-3">
                <?=
				wp_nav_menu(
                    array(
                        'theme_location'  => 'footer_menu1',
                    	'container_class' => 'footer__menu',
                    )
                );
                ?>
            </div>
            <div class="col-sm-6 col-xl-3">
                <?=
				wp_nav_menu(
					array(
						'theme_location'  => 'footer_menu2',
						'container_class' => 'footer__menu',
					)
				);
				?>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="footer-title">Contact</div>
                <div class="mb-2"><?= do_shortcode( '[contact_phone icon=true]' ); ?></div>
                <div class="mb-4"><?= do_shortcode( '[contact_email icon=true]' ); ?></div>
                <div><span class="footer-title">Connect:</span> <?= do_shortcode( '[social_icons class="ms-2 d-inline fs-500"]' ); ?>
            </div>
        </div>

        <div class="row gx-2 colophon py-3">
            <div class="col-lg-7 text-center text-lg-start">
                &copy; <?= esc_html( gmdate( 'Y' ) ); ?> R D Beer &amp; Son Ltd. T/A Valewood Bathrooms. Registered in England no. 09337816.
            </div>
            <div class="col-lg-5 text-end d-flex gap-2 justify-content-center justify-content-lg-end flex-wrap">
                <a href="/privacy-policy/">Privacy &amp; Cookies</a> |
                <span>Site by <a href="https://www.lamcat.co.uk/" rel="noopener" target="_blank" class="lc" title="Lamcat Design & Consulting">Lamcat</a></span>
            </div>
        </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>