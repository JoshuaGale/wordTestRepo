<?php
/**
 * Kirki Advanced Customizer
 *
 * @package Kirki
 */

/**
 * Create our panels and sections.
 */
function kirki_topcat_lite_panels_sections( $wp_customize ) {
	/* General Options */
	$wp_customize->add_panel( 'panel_general', array(
		'priority' => 10,
		'title'    => __( 'General options', 'topcat-lite' )
	) );

	/* General Panel */
	$wp_customize->add_section( 'topcat_lite_general_section', array(
		'title'    => __( 'General', 'topcat-lite' ),
		'priority' => 10,
		'panel'    => 'panel_general'
	) );
	
}

add_action( 'customize_register', 'kirki_topcat_lite_panels_sections' );


/**
 * Add our controls.
 */
function kirki_topcat_lite_fields( $fields ) {
	/* Copyright */
	$fields[] = array(
		'type'        => 'text',
		'label'       => __( 'Copyright', 'topcat-lite' ),
		'section'     => 'topcat_lite_general_section',
		'settings'    => 'topcat_lite_copyright',
		'priority'    => 10,
		'description' => __( 'Please add you Copyright here', 'topcat-lite' ),
		'default'     => __( '&copy;2015 Topcat. All Rights Reserved', 'topcat-lite' )
	);

	$fields[] = array(
		'type'        => 'checkbox',
		'settings'    => 'topcat_lite_enable_copyright',
		'label'       => __( 'Enable/Disable Copyright', 'topcat-lite' ),
		'priority'    => 10,
		'description' => __( 'Enable/Disable Copyright in footer', 'topcat-lite' ),
		'section'     => 'topcat_lite_general_section',
		'default'     => '1',
	);

	$fields[] = array(
		'type'        => 'checkbox',
		'settings'    => 'topcat_lite_enable_poweredby',
		'label'       => __( 'Enable/Disable Powered By WordPress', 'topcat-lite' ),
		'priority'    => 10,
		'description' => __( 'Enable/Disable Powered By WordPress in footer', 'topcat-lite' ),
		'section'     => 'topcat_lite_general_section',
		'default'     => '1',
	);
	return $fields;
}

add_filter( 'kirki/fields', 'kirki_topcat_lite_fields' );

/**
 * Configuration sample for the Kirki Customizer
 */
function kirki_topcat_lite_configuration() {

	$args = array(
		/*		'logo_image'   => get_template_directory_uri() . '/images/logotop.png', */
		'description'  => __( 'This is the theme description. You can edit it in the Kirki configuration and add whatever you want here.', 'topcat-lite' ),
		'color_accent' => '#00bcd4',
		'color_back'   => '#455a64',
	);

	return $args;

}

add_filter( 'kirki/config', 'kirki_topcat_lite_configuration' );

/**
 * Custom CSS
 */
function kirki_topcat_lite_custom_css() {

	// Early exit if Kirki is not installed
	if ( ! function_exists( 'kirki_get_option' ) ) {
		return;
	}

	// Add custom CSS for layouts
	$css = '';
	if ( 'full' == kirki_get_option( 'layout' ) ) {
		$css .= '#primary{width:100%;}';
	}
	elseif ( 'left-sidebar' == kirki_get_option( 'layout' ) ) {
		$css .= '#primary{float:right;}#secondary{float:left;}';
	}

	wp_add_inline_style( 'twentytwelve-style', $css );

}

add_action( 'wp_enqueue_scripts', 'kirki_topcat_lite_custom_css' );
