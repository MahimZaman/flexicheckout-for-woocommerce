<?php

namespace FlexiCheckout\Admin;

defined('ABSPATH') || exit;

class Admin
{

    public function __construct()
    {
        $this->load_dependencies();
    }

    private function load_dependencies()
    {
        require_once __DIR__ . '/CPT.php';

        new CPT();
    }
}
