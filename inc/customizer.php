<?php
/**
 * RGDeuce Theme Customizer.
 *
 * @package RGDeuce
 */

function rgdeuce_theme_customizer( $wp_customize ) {
	
    // Logo upload
    $wp_customize->add_section( 'rgdeuce_logo_section' , array(
	    'title'       => __( 'Logo', 'rgdeuce' ),
	    'priority'    => 30,
	    'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	$wp_customize->add_setting( 'rgdeuce_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'rgdeuce_logo', array(
		'label'    => __( 'Logo', 'rgdeuce' ),
		'section'  => 'rgdeuce_logo_section',
		'settings' => 'rgdeuce_logo',
	) ) );
    // Choose excerpt or full content on blog
    $wp_customize->add_section( 'rgdeuce_layout_section' , array(
	    'title'       => __( 'Layout', 'rgdeuce' ),
	    'priority'    => 30,
	    'description' => 'Change how rgdeuce displays posts',
	) );
	$wp_customize->add_setting( 'rgdeuce_post_content', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'rgdeuce_sanitize_index_content',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'rgdeuce_post_content', array(
		'label'    => __( 'Post content', 'rgdeuce' ),
		'section'  => 'rgdeuce_layout_section',
		'settings' => 'rgdeuce_post_content',
		'type'     => 'radio',
		'choices'  => array(
			'option1' => 'Excerpts',
			'option2' => 'Full content',
			),
	) ) );


/*--------------------------------------------------------------
	// CSS Styles
--------------------------------------------------------------*/

	$wp_customize->add_section( 'css_styles', array(
		'title'                 => __( 'CSS Styles', 'rgdeuce' ),
		'priority'              => 30
	) );
	$wp_customize->add_setting( 'rgdeuce_theme_options[rgdeuce_inline_css]' ,array( 'sanitize_callback' => 'wp_filter_nohtml_kses', 'type' => 'option' ) );
	$wp_customize->add_control( 'res_rgdeuce_inline_css', array(
		'label'                 => __( 'Custom CSS Styles', 'rgdeuce' ),
		'section'               => 'css_styles',
		'settings'              => 'rgdeuce_theme_options[rgdeuce_inline_css]',
		'type'                  => 'textarea'
	) );

	// Set site name and description to be previewed in real-time
	$wp_customize->get_setting('blogname')->transport='postMessage';
	$wp_customize->get_setting('blogdescription')->transport='postMessage';
	// Enqueue scripts for real-time preview
	wp_enqueue_script( 'rgdeuce-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'jquery' ) );
 }
add_action('customize_register', 'rgdeuce_theme_customizer');
/**
 * Sanitizes a hex color. Identical to core's sanitize_hex_color(), which is not available on the wp_head hook.
 *
 * Returns either '', a 3 or 6 digit hex color (with #), or null.
 * For sanitizing values without a #, see sanitize_hex_color_no_hash().
 *
 * @since 1.7
 */
function rgdeuce_sanitize_hex_color( $color ) {
	if ( '' === $color )
		return '';
	// 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
		return $color;
	return null;
}
/**
 * Sanitizes our post content value (either excerpts or full post content).
 *
 * @since 1.7
 */
function rgdeuce_sanitize_index_content( $content ) {
	if ( 'option2' == $content ) {
		return 'option2';
	} else {
		return 'option1';
	}
}
