<?php

// Setup:
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'https://sirege.fr', // Your store URL
    'ck_2edd6f2b0922e6e609d5353ef70c6d6481d5d365', // Your consumer key
    'cs_b10e155d524140c1ebde2f6c09a19b4666f2c262', // Your consumer secret
    [
        'wp_api' => true, // Enable the WP REST API integration
        'version' => 'wc/v3' // WooCommerce WP REST API version
    ]
);
?>