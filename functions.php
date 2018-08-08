<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

/**
 * Custom styles based on settings
 */
function site_customize_css() { ?>
	<style type="text/css">
			body a {color:<?= get_theme_mod('body_link'); ?> !important;}
			.navbar {background-color:<?= get_theme_mod( 'header_bg' ); ?> !important;}
			.navbar a {color:<?= get_theme_mod( 'headerLink' ); ?> !important;}
			#wrapper-footer, #wrapper-footer-full {background-color:<?= get_theme_mod( 'footer_bg' ); ?> !important; color:<?= get_theme_mod( 'footer_text' ); ?> !important;}
			#wrapper-footer a {color:<?= get_theme_mod( 'footer_link' ); ?> !important;}
			.products .card {border:3px solid <?= get_theme_mod('body_accent'); ?>;}
			.card-overlay {background:<?= get_theme_mod('body_accent'); ?>;}
	</style>
	<?php
}
add_action( 'wp_head', 'site_customize_css' );

/**
 * Custom WP Admin Styles
 */
add_action( 'admin_enqueue_scripts', 'custom_admin_styles' );
      function custom_admin_styles() {
        wp_enqueue_style( 'admin-css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0' );
       }