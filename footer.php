<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RGDeuce
 */

?>

	</div><!-- #content -->
	</div><!-- #container -->
<div id="top-footer">
<div class="container container-fluid">
<div class="col-md-4">
		<div class="widget-area footer-left" role="complementary">
			<?php dynamic_sidebar( 'footer-left' ); ?>
		</div>
		</div>
		<div class="col-md-4">
		<div class="widget-area footer-center" role="complementary">
			<?php dynamic_sidebar( 'footer-center' ); ?>
		</div>
		</div>
		<div class="col-md-4">
		<div class="widget-area footer-right" role="complementary">
			<?php dynamic_sidebar( 'footer-right' );  ?>
		</div>
		</div>
</div> <!-- .container -->

	

</div><!-- #top-footer -->
	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container container-fluid">
	<div class="col-md-5">
		<div class="site-info">
		©2015 5ive SPOT - Neighborhood Kitchen & Bar <br />
		All Rights Reserved <br />
			<a href="http://rgdeucemedia.com" target="_blank">Powered By RGDeuce Media</a>
			
		</div><!-- .site-info -->
		</div>
	<div class="col-md-5"><nav>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_id' => 'footer-menu' ) ); ?></nav>
	</div>
</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
