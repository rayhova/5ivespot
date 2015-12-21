	<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RGDeuce
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

    <style type="text/css" id="custom-background-css-override">
        body { background: url('/wp-content/uploads/2014/01/Image00018.jpg') center; }
    </style>
    <script type="text/javascript"
	src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script type="text/javascript">
jQuery(document).ready(function() {
    $('#menu-toggle').click(function() {
        if($('#menu-toggle').hasClass('closed')) {
            $('#mobile-nav').animate({left: "0"}, 400);
            $(this).removeClass('closed').addClass('open');
         }
        else if($('#menu-toggle').hasClass('open')) {
            $('#mobile-nav').animate({left: "-250px"}, 400);
            $(this).removeClass('open').addClass('closed');
          }  
    });
});
</script>


</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rgdeuce' ); ?></a>
<div id="utility-bar"><div class="container container-fluid">
<div class="col-md-5"> <div class="utility-addy"><i class="fa fa-map-marker"></i> 9820 Liberty Road Randallstown, MD 21133
<i class="fa fa-phone"></i> 410-521-6054</div>
</div>
<div class="col-md-2">
<div class="book-event">
	<a href="/contact-us/?booking=Yes">Book an Event <i class="fa fa-calendar"> </i></a>
</div>
</div>

<div class="col-md-5"><nav><?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'menu_id' => 'top-menu' ) ); ?></nav></div>
</div>
</div><!-- #utility-bar -->
	<header id="masthead" class="site-header" role="banner"><div class="container container-fluid">
		<div class="col-md-4">
		<div class="site-branding">
			<?php if ( get_theme_mod( 'rgdeuce_logo' ) ) : ?>
    <div class='site-logo'>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'rgdeuce_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
    </div>
<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
</div>
<div class="col-md-8">
		<nav id="site-navigation" class="main-navigation" role="navigation">
				
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<div id="menu-toggle" class="closed" aria-controls="mobile-menu" aria-expanded="false"><i class="fa fa-bars fa-3x"></i></div>
		<nav id="mobile-nav" class="mobile-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'menu_id' => 'mobile-menu' ) ); ?>
		</nav>
		</div>
		</div><!-- .container -->
	</header><!-- #masthead -->
	
	<header class="entry-header">
		<h1 class="entry-title">Events</h1>
	</header><!-- .entry-header --> 
<div class="container container-fluid content-container">
	<div id="content" class="site-content">
