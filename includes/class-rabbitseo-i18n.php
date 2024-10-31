<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.rabbitseo.com
 * @since      1.0.1
 *
 * @package    Rabbitseo
 * @subpackage Rabbitseo/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.1
 * @package    Rabbitseo
 * @subpackage Rabbitseo/includes
 * @author     rabbitseo <support@rabbitseo.com>
 */
class Rabbitseo_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.1
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'rabbitseo',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
