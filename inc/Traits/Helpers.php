<?php

/**
 * Useful helper traits
 *
 * @package AiPosts
 */

namespace AiPosts\Traits;

defined('ABSPATH') || exit;

/**
 * Helpers trait
 */
trait Helpers
{

	public static function svg_icon($key = null, $base46 = false)
	{

		$svg_path = AIPOSTS_ASSET_PATH . 'images' . DIRECTORY_SEPARATOR . 'svg_icons';
		$files_array = array_values(array_diff(scandir($svg_path), array('.', '..')));

		$svg_files_array = [];
		foreach ($files_array as $item) {
			$svg_file = $svg_path . DIRECTORY_SEPARATOR . $item;
			if (file_exists($svg_file)) {
				$name = explode('.', $item);
				$svg_files_array[array_shift($name)] = file_get_contents($svg_file);
			}
		}

		$svg_array = apply_filters('sr_svg_icon', $svg_files_array);

		return empty($key) ? $svg_array : (true === $base46 ? 'data:image/svg+xml;base64,' . base64_encode($svg_array[$key]) : $svg_array[$key]);
	}

	/**
	 * Get all post types
	 *
	 * @return array $post_types
	 */
	public static function get_all_post_types(): array
	{
		$args = array(
			'public'            => true,
			'show_in_nav_menus' => true,
		);

		$output = 'objects';

		$post_types = get_post_types((array) array(
			'public'            => true,
			'show_in_nav_menus' => true,
		), (string) $output);
		$post_types = wp_list_pluck($post_types, 'label', 'name');

		// Exclude attachment and product post types from the list.
		array_diff_key($post_types, array('attachment', 'product'));

		return $post_types;
	}

	/**
	 * Get authors
	 *
	 * @return array $authors
	 */
	public static function get_authors(): array
	{

		$args = array(
			'capability'          => array('edit_posts'),
			'has_published_posts' => true,
			'fields'              => array('ID', 'display_name'),
		);

		// Capability queries newly introduced in WP 5.9.
		if (version_compare($GLOBALS['wp_version'], '5.9', '<')) {
			$args['who'] = 'authors';
			unset($args['capability']);
		}

		$users = get_users($args);

		if (!empty($users)) {
			return wp_list_pluck($users, 'display_name', 'ID');
		}

		return array();
	}

	/**
	 * Pagination
	 *
	 * @param int $total_pages
	 *
	 * @return void
	 */
	public static function display_pagination(int $total_pages): void
	{
		$big             = 999999999;
		$pagination_args = array(
			'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format'    => '?paged=%#%',
			'current'   => max(1, get_query_var('paged')),
			'total'     => $total_pages,
			'prev_text' => '&#8592;',
			'next_text' => '&#8594;',
		);
		echo '<div class="aiposts-pagination">' . paginate_links($pagination_args) . '</div>';
	}
}
