<?php

/**
 * Plugin Name:       Servicer
 * Description:       CoderGens Servicer boulerplate.
 * Version:           1.0.0
 * Author:            CoderGens
 * Author URI:        https://codergens.com
 * Contributors:      codergens
 * Requires at least: 5.6
 * Tested up to:      6.1
 * Tags:              codergens, servicer
 * License:           GPLv3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       servicer
 *
 * @package Servicer
 */

defined('ABSPATH') || exit;

// If u want to load a function only in the front end.
add_action('plugins_loaded', 'my_front_end_function');
function my_front_end_function(): void
{
	if (!is_admin()) {

		$uri = _get_uri();

		if ('sr-board' === $uri) {
			include SERVICER_DIR_PATH . 'templates/sr-board.php';
		}
		// get_header('');
	}
}

// Plugin specific constants.
define('SERVICER_LICENSE', 'free');
define('SERVICER_VERSION', '1.0.0');
define('SERVICER_DIR_URL', plugin_dir_url(__FILE__));
define('SERVICER_DIR_PATH', plugin_dir_path(__FILE__));
define('SERVICER_ASSET_URL', plugin_dir_url(__FILE__) . 'assets/');
define('SERVICER_ASSET_PATH', plugin_dir_path(__FILE__) . 'assets/');


// Require autoload.
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) :
	require_once dirname(__FILE__) . '/vendor/autoload.php';
endif;

// Initialize classes.
if (class_exists('Servicer\\Init')) :
	Servicer\Init::register_services();
endif;

// Handles stuff at plugin activation.
register_activation_hook(__FILE__, 'servicer_activated');

/**
 * Activation callback
 *
 * @return void
 */
function servicer_activated()
{
	$installed_time = get_option('servicer_installed_at');

	if (!$installed_time) {
		update_option('servicer_installed_at', time());
	}

	update_option('servicer_version', SERVICER_VERSION);
	update_option('servicer_license', SERVICER_LICENSE);
}

