<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class('border-bottom pt-5 pb-4'); ?> id="post-<?php the_ID(); ?>">

	<div class="post-image">
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	</div>

	<div class="entry-content pt-3">

	<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
'</a></h2>' ); ?>

		<?php
		the_excerpt();
		?>

		

	</div><!-- .entry-content -->

</article><!-- #post-## -->
