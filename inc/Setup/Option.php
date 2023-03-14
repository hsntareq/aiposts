<?php

/**
 * Handles dependencies and setup
 *
 * @package AiPosts
 */

namespace AiPosts\Setup;

use AiPosts\Traits\Helpers;

defined('ABSPATH') || exit;

/**
 * Setup class
 */
class Option
{
	use Helpers;

	/**
	 * Register
	 */
	public function register(): void
	{
		add_action('admin_menu', array($this, 'plugin_menu'));
		add_action('admin_bar_menu', array($this, 'ci_admin_bar_item'), 100);
	}


	function ci_admin_bar_item(\WP_Admin_Bar $wp_admin_bar)
	{

		if (!is_admin()) {
			return;
		} // Display Menu only for wp-admin area

		$menu_id = 'ap-option';

		$wp_admin_bar->add_menu(
			array(
				'id'     => $menu_id,
				'parent' => null, // use 'top-secondary' for toggle menu position.
				'href'   => home_url('ap-board'),
				'title'  => '<span style="display:flex;align-items:center;gap:10px;">' . self::svg_icon('admin_bar') . '<span>SR</span></span>',
			)
		);
		/* $wp_admin_bar->add_menu(
			array(
				'parent' => $menu_id,
				'title'  => __('SR Board', 'text-domain'),
				'id'     => 'ap-board',
				'href'   => home_url('ap-board'),

			)
		); */
	}


	public function plugin_menu()
	{
		add_menu_page('AiPosts', 'AiPosts', 'manage_options', 'ap-option', array(
			$this,
			'option_page_view'
		), self::svg_icon('aiposts', true), 2);
		add_submenu_page(null, 'AiPosts', 'AiPosts', 'manage_options', 'ap-option', array(
			$this,
			'option_page_view'
		));
		add_submenu_page('ap-option', 'AP Settings', 'AP Settings', 'manage_options', 'ap-option-child', array(
			$this,
			'option_child_view'
		));
	}

	public function option_page_view()
	{

		$post_types = self::get_authors();
		$icons      = self::svg_icon();

		_get_template('option');
	}

	public function option_child_view()
	{

		$post_types = self::get_authors();
		$icons      = self::svg_icon();

		_get_template('option-child');
	}
}
