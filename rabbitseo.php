<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.rabbitseo.com
 * @since             1.0.1
 * @package           Rabbitseo
 *
 * @wordpress-plugin
 * Plugin Name:       Rabbit SEO
 * Plugin URI:        https://www.rabbitseo.com
 * Description:       Rabbit SEO is designed to provide this information and more to the end user (who doesn't need to be an SEO expert). Our mission is to help you easily get your rankings higher - for that purpose we analyze your website and the keywords you like to improve your ranks and give you tips and hints on how to reach that goal so eventually you will get more high quality traffic.
 * Version:           1.0.1
 * Author:            rabbitseo
 * Author URI:        https://www.rabbitseo.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rabbitseo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.1 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'RABBITSEO_VERSION', '1.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rabbitseo-activator.php
 */
function activate_rabbitseo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rabbitseo-activator.php';
	Rabbitseo_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rabbitseo-deactivator.php
 */
function deactivate_rabbitseo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rabbitseo-deactivator.php';
	Rabbitseo_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rabbitseo' );
register_deactivation_hook( __FILE__, 'deactivate_rabbitseo' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rabbitseo.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.1
 */
function run_rabbitseo() {

	$plugin = new Rabbitseo();
	$plugin->run();

}
run_rabbitseo();
