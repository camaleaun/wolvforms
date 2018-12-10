<?php
/**
 * WolvForms setup
 *
 * @package WolvForms
 */

defined( 'ABSPATH' ) || exit;

/**
 * Main WolvForms Class.
 *
 * @class WolvForms
 */
final class WolvForms {

	/**
	 * The single instance of the class.
	 *
	 * @var WolvForms
	 */
	protected static $_instance = null;

	/**
	 * Main WolvForms Instance.
	 *
	 * Ensures only one instance of WolvForms is loaded or can be loaded.
	 *
	 * @static
	 * @see wf()
	 * @return WolvForms - Main instance.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
}
