<?php
namespace Nexmo;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Guzzle\Description;

/**
 * Base client sets up common settings, should be extended by
 * individual API classes
 */
class BaseClient extends GuzzleClient
{
    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        // Create the Nexmo client.
        parent::__construct(
            $this->getHttpClientFromConfig($config),
            $this->getDescriptionFromConfig($config),
            null,
            null,
            null,
            $config
        );

        // Ensure that the credentials are set.
        $this->applyCredentials($config);
    }

    private function getHttpClientFromConfig(array $config)
    {
        // If a client was provided, return it.
        if (isset($config['http_client'])) {
            return $config['http_client'];
        }

        // Create a Guzzle HttpClient.
        $clientOptions = isset($config['http_client_options'])
            ? $config['http_client_options']
            : [];
        $client = new HttpClient($clientOptions);

        return $client;
    }

    private function getDescriptionFromConfig(array $config)
    {
        // If a description was provided, return it.
        if (isset($config['description'])) {
            return $config['description'];
        }

        // Load service description data.
        $data = is_readable($config['description_path'])
            ? include $config['description_path']
            : null;

        // Override description from local config if set
        if(isset($config['description_override'])){
            $data = array_merge($data, $config['description_override']);
        }

        return new Description($data);
    }

    private function applyCredentials(array $config)
    {
        // Ensure that the credentials have been provided.
        if (!isset($config['api_key'])) {
            throw new \InvalidArgumentException(
                'You must provide an Api Key.'
            );
        }
        if (!isset($config['api_secret'])) {
            throw new \InvalidArgumentException(
                'You must provide an Api Secret.'
            );
        }

        // Set credentials in default variables so that we don't
        // have to pass them to every method individually
        $defaultsConfig = $this->getConfig('defaults');
        $defaultsConfig += [
            'api_key' => $config['api_key'],
            'api_secret' => $config['api_secret']
        ];
        $this->setConfig('defaults', $defaultsConfig);
    }
}