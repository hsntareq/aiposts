<?php
/**
 * Handles stuff during plugin uninstallation
 *
 * @package Servicer
 */

defined('WP_UNINSTALL_PLUGIN') || exit;

$options = array(
	'servicer_installed_at',
	'servicer_version',
	'servicer_license',
);

foreach ($options as $option) {
	delete_option($option);
}