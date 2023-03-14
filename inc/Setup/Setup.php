<?php

/**
 * Handles dependencies and setup
 *
 * @package AiPosts
 */

namespace AiPosts\Setup;

defined('ABSPATH') || exit;

/**
 * Setup class
 */
class Setup
{

	/**
	 * Minimum PHP Version
	 *
	 * @var string Minimum PHP version required to run the plugin.
	 */
	const MINIMUM_PHP_VERSION = '7.0';

	/**
	 * Register
	 */
	public function register(): void
	{
		add_action('plugins_loaded', array($this, 'on_plugins_loaded'));
		add_action('init', array($this, 'create_bs_pages'));
	}

	public function create_bs_pages()
	{
		$pages_all = array(
			'ap-admin'    => array(
				'title'   => 'AiPosts Admin',
				'content' => 'AiPosts Admin Content'
			),
			'ap-login'    => array(
				'title'   => 'AiPosts Login',
				'content' => 'AiPosts Login Content'
			),
			'ap-lostpass' => array(
				'title'   => 'AiPosts Lostpass',
				'content' => 'AiPosts Lost Password'
			)
		);

		foreach ($pages_all as $key => $thePage) {

			if (false == get_page_by_path($key)) {
				wp_insert_post(array(
					'post_title'   => $thePage['title'],
					'post_content' => $thePage['content'],
					'post_status'  => 'publish',
					'post_type'    => 'page',
					'post_name'    => $key,
				));
			} else {
				$admin_page = get_posts(array(
					'name'        => $key,
					'post_type'   => 'page',
					'post_status' => 'publish',
				));

				if (empty($admin_page)) {
					$page = array_shift($admin_page);
					wp_update_post(array(
						'ID'          => $page->ID,
						'post_status' => 'draft',
					));
				}
			}
		}
	}

	/**
	 * On plugins loaded
	 */
	public function on_plugins_loaded(): void
	{
		// Check php compatibility and then hook in.
		if ($this->is_php_compatible()) {
			// Load plugin's textdomain. this can also be called outside the condition. Just added it to show the possibilities.
			load_plugin_textdomain('aiposts');
		}
	}

	/**
	 * Is php compatible
	 *
	 * @return bool true|false
	 */
	public function is_php_compatible(): bool
	{

		// Check for required PHP version.
		if (version_compare(PHP_VERSION, self::MINIMUM_PHP_VERSION, '<')) {
			add_action('admin_notices', array($this, 'admin_notice_minimum_php_version'));

			return false;
		}

		return true;
	}

	/**
	 * Admin notice for php version check
	 */
	public function admin_notice_minimum_php_version(): void
	{

		if (isset($_GET['activate'])) {
			unset($_GET['activate']);
		}

		$message = sprintf( /* translators: 1: Plugin name 2: PHP 3: Required PHP version */esc_html__('%1$s requires %2$s version %3$s or greater.', 'aiposts'), '<strong>' . esc_html__('AiPosts', 'aiposts') . '</strong>', '<strong>' . esc_html__('PHP', 'aiposts') . '</strong>', self::MINIMUM_PHP_VERSION);

		printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
	}
}
