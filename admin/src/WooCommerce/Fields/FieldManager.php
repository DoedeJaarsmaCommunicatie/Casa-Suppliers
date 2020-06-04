<?php

namespace CasaLever\Admin\WooCommerce\Fields;

class FieldManager
{
	/**
	 * @param $class
	 */
	public static function register($class)
	{
		if (class_exists($class)) {
			/** @var Field $call */
			$call = new $class();

			if (!is_subclass_of($call, Field::class)) {
				return;
			}

			// First hook the field to show it.
			\add_action($call->hook_name(), [$call, 'register']);

			// Next hook the store function
			\add_action('woocommerce_process_product_meta', [$call, 'store'], 10, 1);
		}
	}
}
