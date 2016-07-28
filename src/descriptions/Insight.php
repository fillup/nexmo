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
                    'type' => 'integer',
                    'location' => 'json',
                    'minimum' => 1000,
                    'maximum' => 30000,
                ],
                'callback_method' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => ['GET','POST'],
                ],
                'client_ref' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'maxLength' => 40,
                ],
            ]
        ],
        'Standard' => [
            'httpMethod' => 'POST',
            'uri' => 'https://api.nexmo.com/number/lookup/json',
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
                'country' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'maxLength' => 40,
                ],
            ]
        ],
        'Basic' => [
            'httpMethod' => 'POST',
            'uri' => 'https://api.nexmo.com/ni/basic/json',
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
                'country' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'maxLength' => 40,
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
