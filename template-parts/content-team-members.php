<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RGDeuce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="col-md-3">
<div class="team-pic"><?php the_post_thumbnail(); ?></div>
	<header class="entry-header">
		<h2 class="team-name"><?php the_title( ); ?></h2>
		<hr class="team-bar">
		<h3 class="team"><?php the_field('position'); ?></h3>
		<h4 class="team"><a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a></h4>
		<h5 class="team"><?php the_field('signature_drink'); ?></h5>
		<div class="team-more-icon show-<?php the_ID(); ?>" onclick="teamshow('team-<?php the_ID(); ?>')"><i class="fa fa-chevron-down"></i></div>
	</header><!-- .entry-header -->

	<div class="entry-content team-bio team-<?php the_ID(); ?>">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'rgdeuce' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rgdeuce' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php rgdeuce_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</div>
	

	
</article><!-- #post-## -->
