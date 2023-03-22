<?php

/**
 * Handles initialization of classes
 *
 * @package AiPosts
 */

namespace AiPosts;

defined('ABSPATH') || exit;

/**
 * Init class
 */
final class Init
{

	/**
	 * Get services
	 *
	 * @return array full list of classes
	 */
	public static function get_services(): array
	{
		return array(
			Setup\Setup::class,
			Setup\Enqueue::class,
			Setup\Option::class,
			Gpt\Gpt::class,
		);
	}

	/**
	 * Register services
	 */
	public static function register_services(): void
	{
		foreach (self::get_services() as $class) {
			$service = self::instantiate($class);
			if (method_exists($service, 'register')) {
				$service->register();
			}
		}
	}

	/**
	 * Initialize the class
	 *
	 * @param $class
	 *
	 * @return mixed
	 */
	private static function instantiate($class): mixed
	{
		return new $class();
	}
}
