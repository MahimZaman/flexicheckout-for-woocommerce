<?php

/**
 * Plugin Name: FlexiCheckout
 * Plugin URI: https://condixia.com
 * Author: Mahim Zaman (Condixia)
 * Author URI: https://mahimzaman.com
 * Description: Custom WooCommerce checkout builder using Elementor.
 * Version: 1.0.0
 * Text Domain: flexicheckout
 */

defined('ABSPATH') || exit;

define('FLEXI_CHECKOUT_PATH', plugin_dir_path(__FILE__));
define('FLEXI_CHECKOUT_URL', plugin_dir_url(__FILE__));

require_once FLEXI_CHECKOUT_PATH . 'includes/Core/Plugin.php';

add_action('plugins_loaded', function () {
    \FlexiCheckout\Core\Plugin::instance();
});
