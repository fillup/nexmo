<?php
/**
 * Include Composer autoloader
 */
require_once __DIR__.'/../../vendor/autoload.php';

/**
 * Import Sms client
 */
use Nexmo\Sms;

/**
 * Load config, expecting an array with:
 * api_key, api_secret
 */
$config = include __DIR__.'/../../config-local.php';

/**
 * Get an SMS client object
 */
$sms = new Sms($config);

/**
 * Now lets search for a message
 */
$results = $sms->searchMessage([
    'id' => $config['search']['id'],
]);

/**
 * Dump out results
 */
print_r($results);