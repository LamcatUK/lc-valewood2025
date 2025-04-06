<?php
/**
 * File: lc-blocks.php
 * Description: Registers custom ACF blocks and modifies Gutenberg core blocks for the theme.
 * Author: Your Name
 * Theme: Valewood Bathrooms
 *
 * @package lc-valewood2025
 */

/**
 * Registers custom ACF blocks for the theme.
 *
 * This function is used to define and register Advanced Custom Fields (ACF) blocks
 * that can be used within the WordPress block editor. Each block can have its own
 * settings, templates, and styles.
 *
 * @return void
 */
function acf_blocks() {
    if ( function_exists( 'acf_register_block_type' ) ) {

		// INSERT NEW BLOCKS HERE.

        acf_register_block_type(
            array(
                'name'            => 'lc_location',
                'title'           => __( 'LC Location' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-location.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_area_list',
                'title'           => __( 'LC Area List' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-area-list.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_all_testimonials',
                'title'           => __( 'LC All Testimonials' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-all-testimonials.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_contact',
                'title'           => __( 'LC Contact' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-contact.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_portfolio',
                'title'           => __( 'LC Portfolio' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-portfolio.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_text_image',
                'title'           => __( 'LC Text Image' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-text-image.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_portfolio_teaser',
                'title'           => __( 'LC Portfolio Teaser' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-portfolio-teaser.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_cta',
                'title'           => __( 'LC CTA' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-cta.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_why_us',
                'title'           => __( 'LC Why Us' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-why-us.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_testimonial_slider',
                'title'           => __( 'LC Testimonial Slider' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-testimonial-slider.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_services',
                'title'           => __( 'LC Services' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-services.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_intro',
                'title'           => __( 'LC Intro' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-intro.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'            => 'lc_home_hero',
                'title'           => __( 'LC Home Hero' ),
                'category'        => 'layout',
                'icon'            => 'cover-image',
                'render_template' => 'page-templates/blocks/lc-home-hero.php',
                'mode'            => 'edit',
                'supports'        => array(
                    'mode'      => false,
                    'anchor'    => true,
                    'className' => true,
                    'align'     => true,
                ),
            )
        );

    }
}
add_action( 'acf/init', 'acf_blocks' );


/**
 * Modifies Gutenberg core block types.
 *
 * Adds a render callback to specific core blocks to wrap their content
 * in a custom container.
 *
 * @param array  $args Arguments for registering a block type.
 * @param string $name Name of the block type.
 * @return array Modified arguments for the block type.
 */
function core_image_block_type_args( $args, $name ) {
	if ( 'core/paragraph' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
    }
	if ( 'core/heading' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
    }
	if ( 'core/list' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
    }
	return $args;
}
add_filter( 'register_block_type_args', 'core_image_block_type_args', 10, 3 );

/**
 * Wraps the content of specific core blocks in a custom container.
 *
 * @param array  $attributes Block attributes.
 * @param string $content    Block content.
 * @return string Modified block content wrapped in a container.
 */
function modify_core_add_container( $attributes, $content ) {
	if ( ! empty( $GLOBALS['skip_core_block_wrapping'] ) ) {
		return $content;
	}

	ob_start();
	?>
	<div class="container-xl">
		<?php echo wp_kses_post( $content ); ?>
	</div>
	<?php
	return ob_get_clean();
}
