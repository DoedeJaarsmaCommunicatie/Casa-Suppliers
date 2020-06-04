<?php

namespace CasaLever;

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://doedejaarsma.nl/
 * @since      1.0.0
 *
 * @package    CasaLever
 * @subpackage CasaLever/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    CasaLever
 * @subpackage CasaLever/includes
 * @author     Doede Jaarsma communicatie <support@doedejaarsma.nl>
 */
class CasaLever_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'casa-lever',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
