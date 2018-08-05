<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

</div><!-- .container -->
<div class="wrapper mt-5" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

	<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					<div class="site-info mt-5">
						
							<p class="text-center">&copy; <?php echo date('Y') ?> <?php echo bloginfo('title'); ?>. All Rights Reserved. </p>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

