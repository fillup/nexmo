<?php
namespace Nexmo;

use Nexmo\BaseClient;

/**
 * Nexmo Verify API Client implemented with Guzzle Web Service
 * @link https://docs.nexmo.com/index.php/verify API Documentation
 *
 * @method array verify(array $config = [])
 * @method array check(array $config = [])
 * @method array search(array $config = [])
 * @method array control(array $config = [])
 */
class Verify extends BaseClient
{
    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        // Set description_path.
        $config += [
            'description_path' => __DIR__ . '/descriptions/Verify.php',
        ];
        // Create the Verify client.
        parent::__construct($config);
    }
}