<?php

namespace FlexiCheckout\Elementor;

class Elementor
{

    public function __construct()
    {
        add_action('elementor/widgets/register', [$this, 'register_widgets']);
        add_action('elementor/documents/register', [$this, 'register_documents']);
        add_action('elementor/elements/categories_registered', function ($elements_manager) {
            $elements_manager->add_category(
                'flexicheckout',
                [
                    'title' => __('FlexiCheckout', 'flexicheckout'),
                    'icon'  => 'eicon-cart',
                ]
            );
        });
        // 1. Tell Elementor this post type is supported
        add_filter('elementor/utils/is_post_type_supported', function ($is_supported, $post_type) {

            if ('flexi_checkout' === $post_type) {
                return true;
            }

            return $is_supported;
        }, 20, 2);


        // 2. Allow Elementor editor for this CPT
        add_filter('elementor/editor/post_types', function ($post_types) {

            if (! in_array('flexi_checkout', $post_types, true)) {
                $post_types[] = 'flexi_checkout';
            }

            return $post_types;
        });


        // 3. Show "Edit with Elementor" button
        add_filter('elementor/admin/localize_settings', function ($settings) {

            $settings['supported_post_types'][] = 'flexi_checkout';

            return $settings;
        });
    }

    public function register_widgets($widgets_manager)
    {
        require_once __DIR__ . '/Widgets/Billing_Form.php';
        $widgets_manager->register(new Widgets\Billing_Form());
    }

    public function register_documents($documents)
    {

        require_once __DIR__ . '/Documents/Checkout_Document.php';

        $documents->register_document_type(
            'flexi-checkout',
            \FlexiCheckout\Elementor\Documents\Checkout_Document::class
        );
    }
}
