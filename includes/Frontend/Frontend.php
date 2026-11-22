<?php

namespace FlexiCheckout\Frontend;

defined('ABSPATH') || exit;

class Frontend
{

    public function __construct()
    {
        require_once __DIR__ . '/Template_Loader.php';
        new Template_Loader();
    }
}
