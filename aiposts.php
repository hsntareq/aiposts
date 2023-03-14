<?php

/**
 * Plugin Name:       AiPosts
 * Description:       CoderGens AiPosts boulerplate.
 * Version:           1.0.0
 * Author:            CoderGens
 * Author URI:        https://codergens.com
 * Contributors:      codergens
 * Requires at least: 5.6
 * Tested up to:      6.1
 * Tags:              codergens, aiposts
 * License:           GPLv3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       aiposts
 *
 * @package AiPosts
 */

defined('ABSPATH') || exit;

// If u want to load a function only in the front end.
add_action('plugins_loaded', 'my_front_end_function');
function my_front_end_function(): void
{
	if (!is_admin()) {

		$uri = _get_uri();

		if ('ap-board' === $uri) {
			include AIPOSTS_DIR_PATH . 'templates/ap-board.php';
		}
		// get_header('');
	}
}

// Plugin specific constants.
define('AIPOSTS_LICENSE', 'free');
define('AIPOSTS_VERSION', '1.0.0');
define('AIPOSTS_DIR_URL', plugin_dir_url(__FILE__));
define('AIPOSTS_DIR_PATH', plugin_dir_path(__FILE__));
define('AIPOSTS_ASSET_URL', plugin_dir_url(__FILE__) . 'assets/');
define('AIPOSTS_ASSET_PATH', plugin_dir_path(__FILE__) . 'assets/');


// Require autoload.
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) :
	require_once dirname(__FILE__) . '/vendor/autoload.php';
endif;

// Initialize classes.
if (class_exists('AiPosts\\Init')) :
	AiPosts\Init::register_services();
endif;

// Handles stuff at plugin activation.
register_activation_hook(__FILE__, 'aiposts_activated');

/**
 * Activation callback
 *
 * @return void
 */
function aiposts_activated()
{
	$installed_time = get_option('aiposts_installed_at');

	if (!$installed_time) {
		update_option('aiposts_installed_at', time());
	}

	update_option('aiposts_version', AIPOSTS_VERSION);
	update_option('aiposts_license', AIPOSTS_LICENSE);
}
