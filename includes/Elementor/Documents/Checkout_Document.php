<?php

namespace FlexiCheckout\Elementor\Documents;

use Elementor\Core\Base\Document;

defined('ABSPATH') || exit;

class Checkout_Document extends Document
{

    public static function get_type()
    {
        return 'flexi-checkout';
    }

    public static function get_title()
    {
        return __('Flexi Checkout', 'flexicheckout');
    }

    public static function get_properties()
    {
        return [
            'supports' => [
                'title' => true,
                'editor' => true,
            ],
        ];
    }

    public function get_css_wrapper_selector()
    {
        return '.flexi-checkout-wrapper';
    }
}
