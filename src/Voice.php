<?php
namespace Nexmo;

use Nexmo\BaseClient;

/**
 * Nexmo SMS API Client implemented with Guzzle Web Service
 *
 * @method array call(array $config = [])
 * @method array textToSpeech(array $config = [])
 * @method array textToSpeechPromptCapture(array $config = [])
 * @method array textToSpeechPromptConfirm(array $config = [])
 */
class Voice extends BaseClient
{
    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        // Set description_path.
        $config += [
            'description_path' => __DIR__ . '/descriptions/Voice.php',
        ];
        // Create the Voice client.
        parent::__construct($config);
    }
}