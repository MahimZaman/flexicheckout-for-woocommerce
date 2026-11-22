<?php

namespace FlexiCheckout\Core;

class Plugin
{

    private static $instance = null;

    public static function instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
        $this->load_dependencies();
        $this->init_modules();
    }

    private function load_dependencies()
    {

        // Core
        require_once __DIR__ . '/Loader.php';
        require_once __DIR__ . '/Assets.php';

        // Admin
        require_once FLEXI_CHECKOUT_PATH . 'includes/Admin/Admin.php';

        // Frontend
        require_once FLEXI_CHECKOUT_PATH . 'includes/Frontend/Frontend.php';

        // Woo
        require_once FLEXI_CHECKOUT_PATH . 'includes/Woo/Checkout.php';

        // Elementor (only if active)
        if (did_action('elementor/loaded')) {
            require_once FLEXI_CHECKOUT_PATH . 'includes/Elementor/Elementor.php';
        }
    }


    private function init_modules()
    {
        new \FlexiCheckout\Admin\Admin();
        new \FlexiCheckout\Frontend\Frontend();
        new \FlexiCheckout\Woo\Checkout();

        if (did_action('elementor/loaded')) {
            new \FlexiCheckout\Elementor\Elementor();
        }
    }
}
