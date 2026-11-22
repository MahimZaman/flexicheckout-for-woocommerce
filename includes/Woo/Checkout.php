<?php

namespace FlexiCheckout\Woo;

defined('ABSPATH') || exit;

class Checkout
{

    public function __construct()
    {
        $this->hooks();
    }

    private function hooks()
    {

        // Replace checkout template content later
        add_filter('woocommerce_checkout_get_checkout_fields', [
            $this,
            'filter_checkout_fields'
        ]);
    }

    public function filter_checkout_fields($fields)
    {
        // Placeholder – real logic later
        return $fields;
    }
}
