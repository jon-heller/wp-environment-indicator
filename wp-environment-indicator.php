<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://jonheller.net
 * @since             1.0.0
 * @package           Wp_Environment_Indicator
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Environment Indicator
 * Plugin URI:        https://github.com/jon-heller/wp-environment-indicator
 * Description:       Displays an indicator above the admin bar indicating the current environment
 * Version:           1.0.1
 * Author:            Jon Heller
 * Author URI:        http://jonheller.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-environment-indicator
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-environment-indicator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_environment_indicator() {

	$plugin = new Wp_Environment_Indicator();
	$plugin->run();

}
run_wp_environment_indicator();
