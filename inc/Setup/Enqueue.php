<?php

/**
 * Handles registering all styles and scripts
 *
 * @package AiPosts
 */

namespace AiPosts\Setup;

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue class
 */
class Enqueue {

	/**
	 * Register
	 */
	public function register(): void {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_frontend_scripts' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
	}

	/**
	 * Enqueue backend scripts
	 */
	public function enqueue_admin_scripts(): void {
		wp_enqueue_style( 'aiposts-admin-style', AIPOSTS_DIR_URL . 'assets/css/editor.min.css', array(), AIPOSTS_VERSION, 'all' );
		wp_enqueue_script( 'aiposts-admin-script', AIPOSTS_DIR_URL . 'assets/js/backend.min.js', array( 'jquery' ), AIPOSTS_VERSION, true );
	}

	/**
	 * Enqueue scripts
	 */
	public function enqueue_frontend_scripts(): void {
		wp_enqueue_style( 'aiposts-styles', AIPOSTS_DIR_URL . '/assets/css/styles.min.css', null, AIPOSTS_DIR_URL, 'all' );
		wp_enqueue_script( 'aiposts-scripts', AIPOSTS_DIR_URL . '/assets/js/frontend.min.js', array( 'jquery' ), AIPOSTS_VERSION, true );
	}
}
