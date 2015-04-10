<?php
namespace Nexmo;

use Nexmo\BaseClient;

/**
 * Nexmo SMS API Client implemented with Guzzle Web Service
 *
 * @method array send(array $config = [])
 * @method array searchMessage(array $config = [])
 * @method array searchMessages(array $config = [])
 * @method array searchRejections(array $config = [])
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
        // Create the Sms client.
        parent::__construct($config);
    }
}