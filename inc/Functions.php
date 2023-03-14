<?php

use Servicer\Traits\Helpers;

/**
 * Provides useful utility functions
 *
 * @package Servicer
 */

defined('ABSPATH') || exit;

/**
 * @param $file_name
 *
 * @return void
 */
function _sr_enqueue_script($file_name): void
{
	$file  = explode('.', esc_attr($file_name));
	$type  = end($file);
	$_tag  = 'js' === $type ? 'script' : 'link';
	$_attr = 'js' === $type ? 'src' : 'href';
	$_rel  = 'js' === $type ? '' : ' rel="stylesheet"';
	$_url  = SERVICER_ASSET_URL . $type . DIRECTORY_SEPARATOR . $file_name;

	printf('<%1$s %3$s="%2$s"%4$s></%1$s>', $_tag, esc_url($_url), $_attr, $_rel);
}

/**
 * Get uri from http request
 *
 * @return string
 */
function _get_uri(): string
{
	return explode('/', urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''))[1];
}

function _get_template($name, $die = false, $dir = null): void
{
	$file = SERVICER_DIR_PATH . "templates/{$name}.php";
	if (file_exists($file)) {
		include $file;
	}
	if (true === $die) {
		die;
	}
}
function get_admin_page_url(string $menu_slug, $query = null, array $esc_options = []): string
{
	$url = menu_page_url($menu_slug, false);

	if ($query) {
		$url .= '&' . (is_array($query) ? http_build_query($query) : (string) $query);
	}

	return esc_url($url, ...$esc_options);
}

function _get_svg($key, $print = true, $base64 = false)
{
	if (false == $print) {
		return Helpers::svg_icon($key, $base64);
	}
	ob_start();
	echo Helpers::svg_icon($key, $base64);
	ob_end_flush();
}

function _get_view($name, $die = false, $dir = null): void
{
	if (strpos($name, '/') !== false) {
		include SERVICER_DIR_PATH . $name;
	} else {
		include SERVICER_DIR_PATH . "views/{$name}.php";
	}
	if (true === $die) {
		die;
	}
}

/**
 * Estimated reading time
 *
 * @param string $content
 *
 * @return string
 */
function servicer_estimated_reading_time(string $content): string
{

	$words  = str_word_count(strip_tags($content));
	$minute = floor($words / 200);
	$second = floor($words % 200 / (200 / 60));

	return $minute . ' Min' . (1 === $minute ? '' : 's') . ', ' . $second . ' Sec' . (1 === $second ? '' : 's');
}

if (!function_exists('pr')) {
	/**
	 * @param $v
	 *
	 * @return void
	 */
	function pr($v): void
	{
		echo '<pre>';
		print_r($v);
		echo '</pre>';
	}
}

if (!function_exists('pd')) {
	/**
	 * @param $v
	 *
	 * @return void
	 */
	function pd($v): void
	{
		echo '<pre>';
		print_r($v);
		echo '</pre>';
		die;
	}
}

if (!function_exists('vd')) {
	/**
	 * @param $v
	 *
	 * @return void
	 */
	function vd($v): void
	{
		echo '<pre>';
		var_dump($v);
		echo '</pre>';
	}
}
