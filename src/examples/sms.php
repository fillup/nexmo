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
 * api_key, api_secret, to, from, text
 */
$config = include __DIR__.'/../../config-local.php';

/**
 * Get an SMS client object
 */
$sms = new Sms($config);

/**
 * Now lets send a message
 */
$results = $sms->send([
    'from' => $config['from'],
    'to' => $config['to'],
    'text' => $config['text'],
]);

/**
 * Dump out results
 */
print_r($results);