<?php
namespace Nexmo;

use Nexmo\BaseClient;

/**
 * Nexmo SMS API Client implemented with Guzzle Web Service
 *
 * @method array send(array $config = [])
 */
class Sms extends BaseClient
{
    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        // Set description_path.
        $config += [
            'description_path' => __DIR__ . '/descriptions/Sms.php',
        ];

        // Create the Smartsheet client.
        parent::__construct(
            $config
        );

    }

}