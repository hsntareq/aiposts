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
		add_action('admin_bar_menu', array($this, 'ap_admin_bar_menu'), 100);
		add_action('admin_post_ap_settings_action', array($this, 'ap_settings_action'));
	}

	function ap_settings_action()
	{
		$post = $_POST;
		unset($post['action']);
		unset($post['redirect_to']);
		// pr(array('ap_fields' => $post));

		update_option('ap_options', array('ap_fields' => $post));

		wp_safe_redirect($_POST['redirect_to']);
		// wp_redirect($_POST['redirect_to']);
	}

	function ap_admin_bar_menu(\WP_Admin_Bar $wp_admin_bar)
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
			'ap_generate_posts_view'
		), self::svg_icon('aiposts', true), 2);
		add_submenu_page('', 'AiPosts', 'AiPosts', 'manage_options', 'ap-option', array(
			$this,
			'ap_generate_posts_view'
		));
		add_submenu_page('ap-option', 'AP Settings', 'AP Settings', 'manage_options', 'ap-settings', array(
			$this,
			'ap_settings_view'
		));
	}

	public function ap_generate_posts_view()
	{

		$arr['post_types'] = self::get_all_post_types();
		$arr['icons']      = self::svg_icon();
		$arr['input_classes']      = ' !ap-form-input ap-w-full !ap-ring-1 !ap-ring-gray-300 focus:!ap-ring-gray-400 focus:!ap-outline-none !ap-rounded focus:!ap-shadow-sm !ap-border-0 ';


		_get_template('option', $arr);
	}

	public function ap_settings_view()
	{

		$arr['post_types'] = self::get_all_post_types();
		$arr['icons']      = self::svg_icon();
		$arr['field_wrapper_classes'] = 'ap-flex ap-items-center ap-justify-between ap-py-3 ap-pl-5 ap-pr-6 ap-rounded-md hover:ap-shadow ap-shadow-sm  ap-transitionhover:ap-cursor-pointer ap-border ap-bg-gray-50 ap-mb-5 ap-gap-5';

		_get_template('settings', $arr);
	}
}
