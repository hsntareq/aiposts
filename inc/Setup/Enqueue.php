<?php
/**
 * Handles registering all styles and scripts
 *
 * @package Servicer
 */

namespace Servicer\Setup;

defined('ABSPATH') || exit;

/**
 * Enqueue class
 */
class Enqueue
{

	/**
	 * Register
	 */
	public function register(): void {
		add_action('wp_enqueue_scripts', array($this, 'enqueue_frontend_scripts'));
		add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_scripts'));
	}

	/**
	 * Enqueue backend scripts
	 */
	public function enqueue_admin_scripts(): void {
		wp_enqueue_style('servicer-admin-style', SERVICER_DIR_URL . 'assets/css/editor.min.css', array(), SERVICER_VERSION, 'all');
		wp_enqueue_script('servicer-admin-script', SERVICER_DIR_URL . 'assets/js/backend.min.js', array('jquery'), SERVICER_VERSION, true);
	}

	/**
	 * Enqueue scripts
	 */
	public function enqueue_frontend_scripts(): void {
		wp_enqueue_style('servicer-styles', SERVICER_DIR_URL . '/assets/css/styles.min.css', null, SERVICER_DIR_URL, 'all');
		wp_enqueue_script('servicer-scripts', SERVICER_DIR_URL . '/assets/js/frontend.min.js', array('jquery'), SERVICER_VERSION, true);
	}
}