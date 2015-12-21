<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RGDeuce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2>Let's Stay in Touch</h2>
	<div class="col-md-4">
	<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'contact-sidebar' ); ?>
</div><!-- #secondary -->
	</div><!-- .col-md-4 (left side) -->
<div class="col-md-7">
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rgdeuce' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	</div>

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'rgdeuce' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

