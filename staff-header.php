<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * staff-Header Template
 *
 *
 * @file           staff-header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php wp_title( '&#124;', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script> 
		
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/flippy.min.js"></script>
<script type="text/javascript">
jQuery(function(){


	
	jQuery("#flippyCarla").bind("click",function(e){
		e.preventDefault();

		jQuery("#flippyBox").flippy({
			color_target:"#000000",
			content:'<div class="teamleft carla"><h3>Carla Pearsall</h3><h4>Owner</h4><div id="scroller1" class="teamright"><p>Lorem ipsum dolor sit amet, vel iriure rationibus voluptatum id, lobortis atomorum tincidunt nec ad. Facilisi postulant posidonium sea no. Sit et graeco scripta instructior, sea expetenda similique id. Cetero nusquam percipit usu te. Pro aeterno delenit veritus no. Nec ad diam utamur feugait, vim quis stet reformidans ei, mea dicat viris ut.</p></div>',
			direction:"LEFT",
			duration:"750",
		});

	
	});
	
	jQuery("#flippyCarlaTwo").bind("click",function(e){
		e.preventDefault();
	
		jQuery("#flippyBox").flippy({
			color_target:"#000000",
			content:'<div class="teamleft carla"><h3>Carla Pearsall</h3><h4>Owner</h4><div id="scroller1" class="teamright"><p>Lorem ipsum dolor sit amet, vel iriure rationibus voluptatum id, lobortis atomorum tincidunt nec ad. Facilisi postulant posidonium sea no. Sit et graeco scripta instructior, sea expetenda similique id. Cetero nusquam percipit usu te. Pro aeterno delenit veritus no. Nec ad diam utamur feugait, vim quis stet reformidans ei, mea dicat viris ut.</p></div>',
			direction:"LEFT",
			duration:"750",
		});
		
	});
	
	jQuery("#flippyStephanie").bind("click",function(e){
		e.preventDefault();
	
		jQuery("#flippyBox").flippy({
			color_target:"#000000",
			content:'<div class="teamleft stephanie"><h3>Stephanie</h3><h4>Owner</h4><div id="scroller1" class="teamright"><p>Lorem ipsum dolor sit amet, vel iriure rationibus voluptatum id, lobortis atomorum tincidunt nec ad. Facilisi postulant posidonium sea no. Sit et graeco scripta instructior, sea expetenda similique id. Cetero nusquam percipit usu te. Pro aeterno delenit veritus no. Nec ad diam utamur feugait, vim quis stet reformidans ei, mea dicat viris ut.</p></div>',
			direction:"RIGHT",
			duration:"750"
		});
	
	});
	
	jQuery("#flippyStephanieTwo").bind("click",function(e){
		e.preventDefault();
	
		jQuery("#flippyBox").flippy({
			color_target:"#000000",
			content:'<div class="teamleft stephanie"><h3>Stephanie</h3><h4>Owner</h4><div id="scroller1" class="teamright"><p>Lorem ipsum dolor sit amet, vel iriure rationibus voluptatum id, lobortis atomorum tincidunt nec ad. Facilisi postulant posidonium sea no. Sit et graeco scripta instructior, sea expetenda similique id. Cetero nusquam percipit usu te. Pro aeterno delenit veritus no. Nec ad diam utamur feugait, vim quis stet reformidans ei, mea dicat viris ut.</p></div>',
			direction:"RIGHT",
			duration:"750"
		});
	
	});
	
	jQuery("#flippyShereen").bind("click",function(e){
		e.preventDefault();
	
		jQuery("#flippyBox").flippy({
			color_target:"#000000",
			content:'<div class="teamleft shereen"><h3>Shereen</h3><h4>Bartender</h4><div id="scroller1" class="teamright"><p>Lorem ipsum dolor sit amet, vel iriure rationibus voluptatum id, lobortis atomorum tincidunt nec ad. Facilisi postulant posidonium sea no. Sit et graeco scripta instructior, sea expetenda similique id. Cetero nusquam percipit usu te. Pro aeterno delenit veritus no. Nec ad diam utamur feugait, vim quis stet reformidans ei, mea dicat viris ut.</p></div>',
			direction:"TOP",
			duration:"750"
		});
	
	});
	
	jQuery("#flippyShereenTwo").bind("click",function(e){
		e.preventDefault();
	
		jQuery("#flippyBox").flippy({
			color_target:"#000000",
			content:'<div class="teamleft shereen"><h3>Shereen</h3><h4>Bartender</h4><div id="scroller1" class="teamright"><p>Lorem ipsum dolor sit amet, vel iriure rationibus voluptatum id, lobortis atomorum tincidunt nec ad. Facilisi postulant posidonium sea no. Sit et graeco scripta instructior, sea expetenda similique id. Cetero nusquam percipit usu te. Pro aeterno delenit veritus no. Nec ad diam utamur feugait, vim quis stet reformidans ei, mea dicat viris ut.</p></div>',
			direction:"TOP",
			duration:"750"
		});
	
	});
	
	jQuery("#flippySharma").bind("click",function(e){
		e.preventDefault();
	
		jQuery("#flippyBox").flippy({
			color_target:"#000000",
			content:'<div class="teamleft sharma"><h3>Sharma</h3><h4>Bartender</h4><div id="scroller1" class="teamright"><p>Lorem ipsum dolor sit amet, vel iriure rationibus voluptatum id, lobortis atomorum tincidunt nec ad. Facilisi postulant posidonium sea no. Sit et graeco scripta instructior, sea expetenda similique id. Cetero nusquam percipit usu te. Pro aeterno delenit veritus no. Nec ad diam utamur feugait, vim quis stet reformidans ei, mea dicat viris ut.</p></div>',
			direction:"BOTTOM",
			duration:"750"
		});
	
	});
	
	jQuery("#flippySharmaTwo").bind("click",function(e){
		e.preventDefault();
	
		jQuery("#flippyBox").flippy({
			color_target:"#000000",
			content:'<div class="teamleft sharma"><h3>Sharma</h3><h4>Bartender</h4><div id="scroller1" class="teamright"><p>Lorem ipsum dolor sit amet, vel iriure rationibus voluptatum id, lobortis atomorum tincidunt nec ad. Facilisi postulant posidonium sea no. Sit et graeco scripta instructior, sea expetenda similique id. Cetero nusquam percipit usu te. Pro aeterno delenit veritus no. Nec ad diam utamur feugait, vim quis stet reformidans ei, mea dicat viris ut.</p></div>',
			direction:"BOTTOM",
			duration:"750"
		});
	
	});

});
</script>
<?php wp_head(); ?>

	</head>

<body <?php body_class(); ?>>

<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div id="header">

		<?php responsive_header_top(); // before header content hook ?>

		<?php if( has_nav_menu( 'top-menu', 'responsive' ) ) { ?>
			<?php wp_nav_menu( array(
								   'container'      => '',
								   'fallback_cb'    => false,
								   'menu_class'     => 'top-menu',
								   'theme_location' => 'top-menu'
							   )
			);
			?>
		<?php } ?>

		<?php responsive_in_header(); // header hook ?>

		<?php if( get_header_image() != '' ) : ?>

			<div id="logo">
				<a href="<?php echo home_url( '/' ); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed ?>

		<?php if( !get_header_image() ) : ?>

			<div id="logo">
				<span class="site-name"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<span class="site-description"><?php bloginfo( 'description' ); ?></span>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed (again) ?>

		<?php get_sidebar( 'top' ); ?>
		<?php wp_nav_menu( array(
							   'container'       => 'div',
							   'container_class' => 'main-nav',
							   'fallback_cb'     => 'responsive_fallback_menu',
							   'theme_location'  => 'header-menu'
						   )
		);
		?>

		<?php if( has_nav_menu( 'sub-header-menu', 'responsive' ) ) { ?>
			<?php wp_nav_menu( array(
								   'container'      => '',
								   'menu_class'     => 'sub-header-menu',
								   'theme_location' => 'sub-header-menu'
							   )
			);
			?>
		<?php } ?>

		<?php responsive_header_bottom(); // after header content hook ?>

	</div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
	<div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>