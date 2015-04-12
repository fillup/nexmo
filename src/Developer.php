<?php
namespace Nexmo;

use Nexmo\BaseClient;

/**
 * Nexmo Developer API Client implemented with Guzzle Web Service
 * @link https://docs.nexmo.com/index.php/developer-api API Documentation
 *
 * @method array accountGetBalance(array $config = [])
 * @method array accountGetPricing(array $config = [])
 * @method array accountUpdateSettings(array $config = [])
 * @method array accountTopUp(array $config = [])
 * @method array accountGetInboundNumbers(array $config = [])
 * @method array numberSearch(array $config = [])
 * @method array numberBuy(array $config = [])
 * @method array numberCancel(array $config = [])
 * @method array numberUpdate(array $config = [])
 */
class Developer extends BaseClient
{
    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        // Set description_path.
        $config += [
            'description_path' => __DIR__ . '/descriptions/Developer.php',
        ];
        /**
         * The developer APIs expect the return content type to be
         * set using the Accept header rather than part of the API path
         */
        $config += [
            'http_client_options' => [
                'defaults' => [
                    'headers' => [
                        'Accept' => 'application/json'
                    ]
                ]
            ]
        ];
        // Create the Developer client.
        parent::__construct($config);
    }
}