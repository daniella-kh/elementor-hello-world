<?php

namespace ElementorHelloWorld\Dynamics;

use ElementorPro\Modules\Woocommerce\Tags\Base_Tag;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Price_Dynamic_Tag extends Base_Tag {

	public function get_name() {
		return 'price-dynamic-tag';
	}

	public function get_title() {
		return __( 'Product Price', 'elementor-hello-world' );
	}

	protected function _register_controls() {

	}

	public function render() {
		$product = wc_get_product();
		echo $product->get_price_html();
	}
}