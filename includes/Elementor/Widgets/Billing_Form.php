<?php

namespace FlexiCheckout\Elementor\Widgets;

use Elementor\Widget_Base;

class Billing_Form extends Widget_Base
{

    public function get_name()
    {
        return 'flexi_billing_form';
    }

    public function get_title()
    {
        return __('Billing Form', 'flexicheckout');
    }

    public function get_categories()
    {
        return ['flexicheckout'];
    }

    protected function render()
    {

        if (! function_exists('woocommerce_checkout_billing')) {
            return;
        }

        echo '<div class="flexi-billing-form">';
        \woocommerce_checkout_billing();
        echo '</div>';
    }
}
