<?php
namespace Nexmo;

use Nexmo\BaseClient;

/**
 * Nexmo SMS API Client implemented with Guzzle Web Service
 *
 * @method array send(array $config = [])
 */
class Alert extends BaseClient
{
    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        // Set description_path.
        $config += [
            'description_path' => __DIR__ . '/descriptions/Alert.php',
        ];
        // Create the UsShortCodes client.
        parent::__construct($config);
    }
}