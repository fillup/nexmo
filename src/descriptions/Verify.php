<?php return [
    'baseUrl' => 'https://rest.nexmo.com',
    'operations' => [
        'Verify' => [
            // Documentation: https://docs.nexmo.com/index.php/verify/verify
            'httpMethod' => 'POST',
            'uri' => '/verify/json',
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
                    'type' => 'string',
                    'location' => 'json',
                ],
                'brand' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'json',
                ],
                'sender_id' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'maxLength' => 11,
                ],
                'code_length' => [
                    'required' => false,
                    'type' => 'int',
                    'location' => 'json',
                ],
                'lg' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => [
                        'de-de','en-au','en-gb','en-us',
                        'en-in','es-es','es-mx','es-us',
                        'fr-ca','fr-fr','is-is','it-it',
                        'js-jp','ko-kr','nl-nl','pl-pl',
                        'pt-pt','ro-ro','ru-ru','sv-se',
                        'tr-tr','zh-cn',
                    ]
                ],
                'require_type' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => ['All','Mobile','Landline'],
                ],
                'pin_expiry' => [
                    'required' => false,
                    'type' => 'int',
                    'location' => 'json',
                    'minimum' => 60,
                    'maximum' => 3600,
                ],
                'next_event_wait' => [
                    'required' => false,
                    'type' => 'int',
                    'location' => 'json',
                    'minimum' => 60,
                    'maximum' => 900,
                ],
            ]
        ],
        'Check' => [
            // Documentation: https://docs.nexmo.com/index.php/verify/check
            'httpMethod' => 'POST',
            'uri' => '/verify/check/json',
            'responseModel' => 'Result',
            'parameters' => [
                'api_key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                ],
                'api_secret' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                ],
                'request_id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'code' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ip_address' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ]
        ],
        'Search' => [
            // Documentation: https://docs.nexmo.com/index.php/verify/search
            'httpMethod' => 'POST',
            'uri' => '/verify/search/json',
            'responseModel' => 'Result',
            'parameters' => [
                'api_key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                ],
                'api_secret' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                ],
                'request_id' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'request_ids' => [
                    'required' => false,
                    'type' => 'array',
                    'location' => 'json',
                ],
            ]
        ],
        'Control' => [
            // Documentation: https://docs.nexmo.com/index.php/verify/control
            'httpMethod' => 'POST',
            'uri' => '/verify/control/json',
            'responseModel' => 'Result',
            'parameters' => [
                'api_key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                ],
                'api_secret' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                ],
                'request_id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'cmd' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => ['cancel','trigger_next_event'],
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