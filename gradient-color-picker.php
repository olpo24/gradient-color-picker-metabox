<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://olpo.de
 * @since             1.0.0
 * @package           Gradient_Color_Picker
 *
 * @wordpress-plugin
 * Plugin Name:       Gradient Color Picker for Metabox
 * Plugin URI:        https://olpo.de/plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Ole
 * Author URI:        https://olpo.de
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gradient-color-picker
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'GRADIENT_COLOR_PICKER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gradient-color-picker-activator.php
 */
function activate_gradient_color_picker() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gradient-color-picker-activator.php';
	Gradient_Color_Picker_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gradient-color-picker-deactivator.php
 */
function deactivate_gradient_color_picker() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gradient-color-picker-deactivator.php';
	Gradient_Color_Picker_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gradient_color_picker' );
register_deactivation_hook( __FILE__, 'deactivate_gradient_color_picker' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gradient-color-picker.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gradient_color_picker() {

	$plugin = new Gradient_Color_Picker();
	$plugin->run();

}
run_gradient_color_picker();
