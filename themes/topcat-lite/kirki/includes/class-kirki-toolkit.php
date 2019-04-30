<?php
/**
 * The main Kirki object
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2015, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Early exit if the class already exists
if ( class_exists( 'Kirki_Toolkit' ) ) {
	return;
}

final class Kirki_Toolkit {

	/** @var Kirki The only instance of this class */
	public static $instance = null;

	public static $version = '1.0.2';

	public $font_registry = null;
	public $scripts       = null;
	public $api           = null;
	public $styles        = array();

	/**
	 * Access the single instance of this class
	 * @return Kirki
	 */
	public static function get_instance() {
		if ( null == self::$instance ) {
			self::$instance = new Kirki_Toolkit();
		}
		return self::$instance;
	}

	/**
	 * Shortcut method to get the translation strings
	 */
	public static function i18n() {

		$i18n = array(
			'background-color'      => __( 'Background Color', 'topcat-lite' ),
			'background-image'      => __( 'Background Image', 'topcat-lite' ),
			'no-repeat'             => __( 'No Repeat', 'topcat-lite' ),
			'repeat-all'            => __( 'Repeat All', 'topcat-lite' ),
			'repeat-x'              => __( 'Repeat Horizontally', 'topcat-lite' ),
			'repeat-y'              => __( 'Repeat Vertically', 'topcat-lite' ),
			'inherit'               => __( 'Inherit', 'topcat-lite' ),
			'background-repeat'     => __( 'Background Repeat', 'topcat-lite' ),
			'cover'                 => __( 'Cover', 'topcat-lite' ),
			'contain'               => __( 'Contain', 'topcat-lite' ),
			'background-size'       => __( 'Background Size', 'topcat-lite' ),
			'fixed'                 => __( 'Fixed', 'topcat-lite' ),
			'scroll'                => __( 'Scroll', 'topcat-lite' ),
			'background-attachment' => __( 'Background Attachment', 'topcat-lite' ),
			'left-top'              => __( 'Left Top', 'topcat-lite' ),
			'left-center'           => __( 'Left Center', 'topcat-lite' ),
			'left-bottom'           => __( 'Left Bottom', 'topcat-lite' ),
			'right-top'             => __( 'Right Top', 'topcat-lite' ),
			'right-center'          => __( 'Right Center', 'topcat-lite' ),
			'right-bottom'          => __( 'Right Bottom', 'topcat-lite' ),
			'center-top'            => __( 'Center Top', 'topcat-lite' ),
			'center-center'         => __( 'Center Center', 'topcat-lite' ),
			'center-bottom'         => __( 'Center Bottom', 'topcat-lite' ),
			'background-position'   => __( 'Background Position', 'topcat-lite' ),
			'background-opacity'    => __( 'Background Opacity', 'topcat-lite' ),
			'on'                    => __( 'ON', 'topcat-lite' ),
			'off'                   => __( 'OFF', 'topcat-lite' ),
			'all'                   => __( 'All', 'topcat-lite' ),
			'cyrillic'              => __( 'Cyrillic', 'topcat-lite' ),
			'cyrillic-ext'          => __( 'Cyrillic Extended', 'topcat-lite' ),
			'devanagari'            => __( 'Devanagari', 'topcat-lite' ),
			'greek'                 => __( 'Greek', 'topcat-lite' ),
			'greek-ext'             => __( 'Greek Extended', 'topcat-lite' ),
			'khmer'                 => __( 'Khmer', 'topcat-lite' ),
			'latin'                 => __( 'Latin', 'topcat-lite' ),
			'latin-ext'             => __( 'Latin Extended', 'topcat-lite' ),
			'vietnamese'            => __( 'Vietnamese', 'topcat-lite' ),
			'hebrew'                => __( 'Hebrew', 'topcat-lite' ),
			'arabic'                => __( 'Arabic', 'topcat-lite' ),
			'bengali'               => __( 'Bengali', 'topcat-lite' ),
			'gujarati'              => __( 'Gujarati', 'topcat-lite' ),
			'tamil'                 => __( 'Tamil', 'topcat-lite' ),
			'telugu'                => __( 'Telugu', 'topcat-lite' ),
			'thai'                  => __( 'Thai', 'topcat-lite' ),
			'serif'                 => _x( 'Serif', 'font style', 'topcat-lite' ),
			'sans-serif'            => _x( 'Sans Serif', 'font style', 'topcat-lite' ),
			'monospace'             => _x( 'Monospace', 'font style', 'topcat-lite' ),
			'font-family'           => __( 'Font Family', 'topcat-lite' ),
			'font-size'             => __( 'Font Size', 'topcat-lite' ),
			'font-weight'           => __( 'Font Weight', 'topcat-lite' ),
			'line-height'           => __( 'Line Height', 'topcat-lite' ),
			'letter-spacing'        => __( 'Letter Spacing', 'topcat-lite' ),
			'top'                   => __( 'Top', 'topcat-lite' ),
			'bottom'                => __( 'Bottom', 'topcat-lite' ),
			'left'                  => __( 'Left', 'topcat-lite' ),
			'right'                 => __( 'Right', 'topcat-lite' ),
		);

		$config = apply_filters( 'kirki/config', array() );

		if ( isset( $config['i18n'] ) ) {
			$i18n = wp_parse_args( $config['i18n'], $i18n );
		}

		return $i18n;

	}

	/**
	 * Shortcut method to get the font registry.
	 */
	public static function fonts() {
		return self::get_instance()->font_registry;
	}

	/**
	 * Constructor is private, should only be called by get_instance()
	 */
	private function __construct() {
	}

	/**
	 * Return true if we are debugging Kirki.
	 */
	public static function kirki_debug() {
		return (bool) ( defined( 'KIRKI_DEBUG' ) && KIRKI_DEBUG );
	}

}
