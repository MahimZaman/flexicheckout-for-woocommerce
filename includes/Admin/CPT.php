<?php

namespace FlexiCheckout\Admin;

defined('ABSPATH') || exit;

class CPT
{

    public function __construct()
    {
        add_action('init', [$this, 'register_cpt']);
    }

    public function register_cpt()
    {
        register_post_type('flexi_checkout', [
            'label'               => __('Checkout Templates', 'flexicheckout'),
            'public'              => true,               // 🔴 REQUIRED
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_rest'        => true,               // 🔴 REQUIRED
            'supports'            => ['title', 'editor'], // 🔴 REQUIRED
            'exclude_from_search' => true,
            'rewrite'             => false,
        ]);
    }
}
