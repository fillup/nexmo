<?php
namespace Nexmo;

use Nexmo\BaseClient;

/**
 * Nexmo Insight API Client implemented with Guzzle Web Service
 *
 * @method array request(array $config = [])
 * @method array standard(array $config = [])
 * @method array basic(array $config = [])
 */
class Insight extends BaseClient
{
    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        // Set description_path.
        $config += [
            'description_path' => __DIR__ . '/descriptions/Insight.php',
        ];
        // Create the Insight client.
        parent::__construct($config);
    }
}
