<?php
/**
 * Event-Page Template
 *
Template Name:  Single Event	
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RGDeuce
 */

get_header(event); ?>

	<div class="container container-fluid">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .container container-fluid -->

<?php get_footer(); ?>
