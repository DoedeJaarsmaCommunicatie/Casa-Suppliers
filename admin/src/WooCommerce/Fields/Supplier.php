<?php

namespace CasaLever\Admin\WooCommerce\Fields;

class Supplier extends Field
{
	const META_KEY = 'casalever_product_supplier';

	/**
	 * @return array
	 */
	protected function get_args()
	{
		return [
			'id' => static::META_KEY,
			'label' => __('Leverancier', 'casalever'),
			'class' => 'casalever-custom-field',
			'desc_tip' => true,
			'description' => __('De leverancier waar de wijn vandaan komt', 'casalever'),
		];
	}

	public function store($post_id)
	{
		$product = wc_get_product($post_id);
		$supplier = isset($_POST[static::META_KEY]) ? $_POST[static::META_KEY] : '';

		$product->update_meta_data(static::META_KEY, sanitize_text_field($supplier));
		$product->save();

		if (!is_multisite()) {
			return;
		}

		add_filter('WOO_MSTORE_admin_product/slave_product_meta_to_update', static function ($meta_data, $data) use ($supplier) {
			if ($data['slave_product']->get_meta(static::META_KEY) !== $supplier) {
				$meta_data[static::META_KEY] = $supplier;
			}

			return $meta_data;
		}, 10 ,2);

		$parentSiteMetaKey = '_woonet_network_is_child_site_id';
		$parentProductMetaKey = '_woonet_network_is_child_product_id';

		$parentID = $product->get_meta($parentSiteMetaKey);

		if (!$parentID) {
			return;
		}

		$parentProductID = $product->get_meta($parentProductMetaKey);
		if (!$parentProductID) {
			return; // If no parent product exists, skip this action.
		}
		$current_blog = get_current_blog_id();
		switch_to_blog($parentID);
		update_post_meta($parentProductID, static::META_KEY, $supplier);
		do_action('WOO_MSTORE_admin_product/process_product', $parentProductID);
		switch_to_blog($current_blog);
	}

	public function register()
	{
		woocommerce_wp_text_input($this->get_args());
	}
}
