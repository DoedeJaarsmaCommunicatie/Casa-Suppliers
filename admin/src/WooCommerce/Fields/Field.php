<?php

namespace CasaLever\Admin\WooCommerce\Fields;

abstract class Field
{
	abstract protected function get_args();

	abstract public function register();

	/**
	 * @param int $post_id
	 */
	abstract public function store($post_id);

	public function hook_name()
	{
		return 'woocommerce_product_options_general_product_data';
	}
}
