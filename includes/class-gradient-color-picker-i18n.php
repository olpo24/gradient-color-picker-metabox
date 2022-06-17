<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://olpo.de
 * @since      1.0.0
 *
 * @package    Gradient_Color_Picker
 * @subpackage Gradient_Color_Picker/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Gradient_Color_Picker
 * @subpackage Gradient_Color_Picker/includes
 * @author     Ole <wp@olpo.de>
 */
class Gradient_Color_Picker_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'gradient-color-picker',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
