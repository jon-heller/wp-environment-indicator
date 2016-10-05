<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://jonheller.net
 * @since      1.0.0
 *
 * @package    Wp_Environment_Indicator
 * @subpackage Wp_Environment_Indicator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Environment_Indicator
 * @subpackage Wp_Environment_Indicator/includes
 * @author     Jon Heller <jon@jonheller.net>
 */
class Wp_Environment_Indicator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-environment-indicator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
