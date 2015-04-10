<?php return [
    'baseUrl' => 'https://rest.nexmo.com',
    'operations' => [
        'Request' => [
            'httpMethod' => 'POST',
            'uri' => '/ni/json',
            'responseModel' => 'Result',
            'parameters' => [
                'api_key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'api_secret' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'number' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'json',
                ],
                'features' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'callback' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'callback_timeout' => [
                    'required' => false,
                    'type' => 'int',
                    'location' => 'json',
                ],
                'callback_method' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'client_ref' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ]
        ],
    ],
    'models' => [
        'Result' => [
            'type' => 'object',
            'properties' => [
                'statusCode' => ['location' => 'statusCode']
            ],
            'additionalProperties' => [
                'location' => 'json'
            ]
        ]
    ]
];