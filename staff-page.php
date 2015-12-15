<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Team-Page Template
 *
Template Name:  Team Page (no sidebar)
 *
 * @file           staff-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/full-width-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content-full" class="grid col-940">
<div class="team-menu">
                                    <ul>
<li><a class="peekaboo_link peekaboo-stephanie peekaboo_onhide" href="#"><span id="button" class="peekaboo_onhide team-button">Stephanie Hannah</span><span id="button" class="peekaboo_onshow team-button-hide" style="display:none;">Stephanie Hannah</span></a></li>
                                        <li><a class="peekaboo_link peekaboo-carla peekaboo_onhide" href="#"><span id="button" class="peekaboo_onhide team-button">Carla Pearsall</span>
<spa id="button"n class="peekaboo_onshow team-button-hide" style="display:none;">Carla Pearsall</span></a></li>
                                        
                                        <li><a class="peekaboo_link peekaboo-sherene peekaboo_onhide" href="#"><span id="button" class="peekaboo_onhide team-button">Sherene</span><span id="button" class="peekaboo_onshow team-button-hide" style="display:none;">Sherene</span></a></li>
                                        <li><a class="peekaboo_link peekaboo-sharma peekaboo_onhide" href="#"><span id="button" class="peekaboo_onhide team-button">Sharma</span><span id="button" class="peekaboo_onshow team-button-hide" style="display:none;">Sharma</span></a></li>
 <li><a class="peekaboo_link peekaboo-nika peekaboo_onhide" href="#"><span id="button" class="peekaboo_onhide team-button">Nika</span><span id="button" class="peekaboo_onshow team-button-hide" style="display:none;">Nika</span></a></li>
 <li><a class="peekaboo_link peekaboo-kierra peekaboo_onhide" href="#"><span id="button" class="peekaboo_onhide team-button">Kierra </span><span id="button" class="peekaboo_onshow team-button-hide" style="display:none;">Kierra</span></a></li>
 <li><a class="peekaboo_link peekaboo-tyra peekaboo_onhide" href="#"><span id="button" class="peekaboo_onhide team-button">Tyra</span><span id="button" class="peekaboo_onshow team-button-hide" style="display:none;">Tyra</span></a></li>
                                    </ul>
                                </div>
	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop-header' ); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>
<h2 class="entry-title post-title"><?php the_title(); ?></h2>
				
				<div class="post-entry">
<div class="peekaboo_content peekaboo-stephanie peekaboo_onhide" style="display:none;"><div id="team-content"><div class="team-left"><div class="image"><img src="/wp-content/themes/5ivespot/images/team/stephanie.jpg"></div><div class="info"><h3>Stephanie Hannah</h3><hr><h4>Owner</h4></div><div class="email"><a href="mailto:"Stephanie@5iveSpotBar.com">Stephanie@5iveSpotBar.com</a></div></div><div class="team-right"><p>Stephanie enters the industry with a true love, passion and understanding of courteous service and quality management.  With over 27 years of corporate work life, she uses her past experience in restaurant management, customer relations and creative design to produce a unique, personable and worthy bar and restaurant atomosphere.  Prior to owing The 5ive SPOT, Stephanie spent several years as an IT administrator and operations manager in the healthcare consulting industry.  Her desire to own her own business began years ago.  Always having an appreciation and affinity for music, entertainment, cocktail mixology and the nightlife business, she made the journey from the corporate world an easy and exciting, albeit – ‘strange’ transition.  In her own words: “When you’ve worked for other people more than half of your life, you question if your decisions and the people around you are the right ones, but it’s so very rare and incredible when your wishes and desires meet your reality, so if that happens, you must jump out on faith – and never look back”.  Stephanies’ hope is that this is the first step of many in building The 5ive SPOT company, brand and reputation as one of the best in the industry.</p></div></div></div>

<div class="peekaboo_content peekaboo-carla peekaboo_onhide" style="display:none;"><div id="team-content"><div class="team-left"><div class="image"><img src="/wp-content/themes/5ivespot/images/team/carla.jpg"></div><div class="info"><h3>Carla Pearsall</h3><hr><h4>Owner</h4></div><div class="email"><a href="mailto:"Carla@5iveSpotBar.com">Carla@5iveSpotBar.com</a></div></div><div class="team-right"><p>Carla enters the industry with an impressive background in financial and program management, operations and hospitality. She has years of experience in customer/client services and brings her passion for event production and management to the helm.  Prior to owning The 5ive SPOT, Carla ran a very successful wedding planning business and continues work within the industry. Carla possesses a tenacious spirit of entreprenuership and hones her skills everyday to ensure that the 5ive SPOT experience is a pleasurable one. She uses her expertise in communication and effective delagation to manage the day-to-day operations as well as providing the “at home” atomosphere that is a vision and promise of what the 5ive Spot offers.  Her love for music and entertainment was one of the driving forces to Carla embarking upon this endeavor, her belief in the quote “do what you love, and you’ll never work a day in your life” is messages she lives by.  This is a dream come true and she seeks to grow that dream even bigger.</p></div></div></div>

<div class="peekaboo_content peekaboo-sherene peekaboo_onhide" style="display:none;"><div id="team-content"><div class="team-left"><div class="image"><img src="/wp-content/themes/5ivespot/images/team/blankteam.jpg"></div><div class="info"><h3>Sherene</h3><hr><h4>Manager</h4></div><div class="email"><a href="mailto:"Sherene@5iveSpotBar.com">Sherene@5iveSpotBar.com</a></div><div class="drink"><h5>Nina Simone</h5></div></div><div class="team-right"><p>Sherene brings a wealth of marketing, sales and banking experience to The 5ive SPOT as the manager and is a licensed and certified mixologist with years of experience in venues such as casinos, lounges, and restaurants. Prior to beginning her career in bar/restaurant management, she served in the US Army and utilizes her background in leadership, service and relationship building to cater to an ever growing clientele and specializes in training and  embraces the social graces and leverage necessary to help a burgeoning nightlife in the local area.  Join Sherene on Mondays, Tuesdays and weekends to enjoy her signature cocktail the Nina Simone. #sherene_rene
</p></div></div></div>

<div class="peekaboo_content peekaboo-sharma peekaboo_onhide" style="display:none;"><div id="team-content"><div class="team-left"><div class="image"><img src="/wp-content/themes/5ivespot/images/team/blankteam.jpg"></div><div class="info"><h3>Sharma</h3><hr><h4>Bartender</h4></div><div class="drink"><h5>Sharma’s signature MaiTai</h5></div></div><div class="team-right"><p>Sharma is our self-proclaimed “Startender” with the truest  Baltimore roots.  She is an experienced mixologist with years of experience. Sharma maximizes her love of high-class entertainment and is a supreme party goer and thrower.  Come enjoy Sharma’s signature MaiTai  #sharmabaltimore</p></div></div></div>

<div class="peekaboo_content peekaboo-kierra peekaboo_onhide" style="display:none;"><div id="team-content"><div class="team-left"><div class="image"><img src="/wp-content/themes/5ivespot/images/team/blankteam.jpg"></div><div class="info"><h3>Kierra</h3><hr><h4>Bartender</h4></div><div class="drink"><h5>KCInfusions</h5></div></div><div class="team-right"><p>Kierra is one of the legacy mixologist and has been instrumental maintaining the existing relationships of prior clientele and continues to assist the owners in developing the practices that help build newer clientele.  Kierra’s own specialty cocktails, labeled KCInfusions lives up to expectations and beyond.  Join Kierra on weekends for the smoothest and fruitiest of drinks. #key_yonce</p></div></div></div>

<div class="peekaboo_content peekaboo-nika peekaboo_onhide" style="display:none;"><div id="team-content"><div class="team-left"><div class="image"><img src="/wp-content/themes/5ivespot/images/team/blankteam.jpg"></div><div class="info"><h3>Nika</h3><hr><h4>Bartender</h4></div><div class="drink"><h5>The Golden Margarita</h5></div></div><div class="team-right"><p>Nika comes to The 5ive SPOT with certiication from the Maryland School of Bartending.  She has several years in the bar and restaurant industry  The Golden Margarita is her specialty. 
Nika brings high-spirited fun and energy to her shifts.  A registered nurse by trade, she uses her caring and thoughtful disposition to serve our clientele, never without a smile.
</p></div></div></div>

<div class="peekaboo_content peekaboo-tyra peekaboo_onhide" style="display:none;"><div id="team-content"><div class="team-left"><div class="image"><img src="/wp-content/themes/5ivespot/images/team/blankteam.jpg"></div><div class="info"><h3>Tyra</h3><hr><h4>Bartender</h4></div><div class="drink"><h5>Sex in the City</h5></div></div><div class="team-right"><p>Tyra is an experienced mixologist with an extensive background in hospitality and food service.  She works every Wednesday and serves her own signature martinis derived from the Sex in the City characters as well as other thoughtful cocktails. Tyra’s goal is to own and operate her own restaurant & venue. Currently she owns and operates her own baking company catering to birthday parties, weddings, etc. #wrappedbyladyt</p></div></div></div>

					<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
				</div>
				<!-- end of .post-entry -->

				<?php get_template_part( 'post-data' ); ?>

				<?php responsive_entry_bottom(); ?>
			</div><!-- end of #post-<?php the_ID(); ?> -->
			<?php responsive_entry_after(); ?>

			

		<?php
		endwhile;

		get_template_part( 'loop-nav' );

	else :

		get_template_part( 'loop-no-posts' );

	endif;
	?>

</div><!-- end of #content-full -->

<?php get_footer(); ?>