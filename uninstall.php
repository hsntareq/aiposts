<?php

/**
 * Handles stuff during plugin uninstallation
 *
 * @package AiPosts
 */

defined('WP_UNINSTALL_PLUGIN') || exit;

$options = array(
	'aiposts_installed_at',
	'aiposts_version',
	'aiposts_license',
);

foreach ($options as $option) {
	delete_option($option);
}
