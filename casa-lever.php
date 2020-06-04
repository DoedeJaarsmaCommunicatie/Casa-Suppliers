<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://doedejaarsma.nl/
 * @since             1.0.0
 * @package           CasaLever
 *
 * @wordpress-plugin
 * Plugin Name:       Casa leverancier
 * Plugin URI:        https://casadelvino.nl/
 * Description:       Deze plugin voegt een leverancier veld toe aan producten, en synchroniseert deze over een multisite.
 * Version:           1.0.0
 * Author:            Doede Jaarsma communicatie
 * Author URI:        https://doedejaarsma.nl/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       casa-lever
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
defined('WPINC') || exit(0);

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CASA_LEVER_VERSION', '1.0.0' );
define('CASA_LEVER_FILE', __FILE__);

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-casa-lever-activator.php
 */
function activate_casa_lever() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-casa-lever-activator.php';
	\CasaLever\CasaLever_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-casa-lever-deactivator.php
 */
function deactivate_casa_lever() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-casa-lever-deactivator.php';
	\CasaLever\CasaLever_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_casa_lever' );
register_deactivation_hook( __FILE__, 'deactivate_casa_lever' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-casa-lever.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_casa_lever() {
	require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

	$plugin = new CasaLever\CasaLever();
	$plugin->run();

}
run_casa_lever();
