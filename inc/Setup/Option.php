<?php

/**
 * Handles dependencies and setup
 *
 * @package Servicer
 */

namespace Servicer\Setup;

use Servicer\Traits\Helpers;

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

		$menu_id = 'sr-option';

		$wp_admin_bar->add_menu(
			array(
				'id'     => $menu_id,
				'parent' => null, // use 'top-secondary' for toggle menu position.
				'href'   => home_url('sr-board'),
				'title'  => '<span style="display:flex;align-items:center;gap:10px;">' . self::svg_icon('admin_bar') . '<span>SR</span></span>',
			)
		);
		/* $wp_admin_bar->add_menu(
			array(
				'parent' => $menu_id,
				'title'  => __('SR Board', 'text-domain'),
				'id'     => 'sr-board',
				'href'   => home_url('sr-board'),

			)
		); */
	}


	function add_svg_icons($key, $value)
	{
		//		return apply_filters( 'svg_icon', self::add_svg_array( $key, $value ) );
	}

	public function plugin_menu()
	{
		add_menu_page('Servicer', 'Servicer', 'manage_options', 'sr-option', array(
			$this,
			'option_page_view'
		), self::svg_icon('servicer', true), 2);
		add_submenu_page(null, 'Servicer', 'Servicer', 'manage_options', 'sr-option', array(
			$this,
			'option_page_view'
		));
	}

	public function option_page_view()
	{

		$post_types = self::get_authors();
		$icons      = self::svg_icon();

		_get_template('option');
	}
}
