<?php

namespace FlexiCheckout\Frontend;

class Template_Loader
{

    public function __construct()
    {
        add_filter('woocommerce_locate_template', [$this, 'override_templates'], 10, 3);
    }

    public function override_templates($template, $template_name, $template_path)
    {

        $plugin_template = FLEXI_CHECKOUT_PATH . 'templates/woocommerce/' . $template_name;

        if (file_exists($plugin_template)) {
            return $plugin_template;
        }

        return $template;
    }
}
