<?php

namespace CasaLever\Admin\WooCommerce\Fields;

class Supplier extends Field
{
	/**
	 * @return array
	 */
	protected function get_args()
	{
		return [
			'id' => 'casalever_product_supplier',
			'label' => __('Leverancier', 'casalever'),
			'class' => 'casalever-custom-field',
			'desc_tip' => true,
			'description' => __('De leverancier waar de wijn vandaan komt', 'casalever'),
		];
	}

	public function store($post_id)
	{
		$product = wc_get_product($post_id);
		$supplier = isset($_POST['casalever_product_supplier']) ? $_POST['casalever_product_supplier'] : '';

		$product->update_meta_data('casalever_product_supplier', sanitize_text_field($supplier));
		$product->save();
	}

	public function register()
	{
		woocommerce_wp_text_input($this->get_args());
	}
}
