<?php return [
    'baseUrl' => 'https://rest.nexmo.com',
    'operations' => [
        'AccountGetBalance' => [
            // Documentation: https://docs.nexmo.com/index.php/developer-api/account-get-balance
            'httpMethod' => 'POST',
            'uri' => '/account/get-balance',
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
            ],
        ],
        'AccountGetPricing' => [
            // Documentation: https://docs.nexmo.com/index.php/developer-api/account-pricing
            'httpMethod' => 'POST',
            'uri' => '/account/get-pricing',
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
                'country' => [
                    // Options: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 2,
                    'maxLength' => 2,
                ],
            ],
        ],
        'AccountUpdateSettings' => [
            // Documentation: https://docs.nexmo.com/index.php/developer-api/account-settings
            'httpMethod' => 'POST',
            'uri' => '/account/settings',
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
                'newSecret' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 8,
                    'maxLength' => 8,
                ],
                'moCallBackUrl' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'drCallBackUrl' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'AccountTopUp' => [
            // Documentation: https://docs.nexmo.com/index.php/developer-api/account-top-up
            'httpMethod' => 'POST',
            'uri' => '/account/top-up',
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
                'trx' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'AccountGetInboundNumbers' => [
            // Documentation: https://docs.nexmo.com/index.php/developer-api/account-numbers
            'httpMethod' => 'POST',
            'uri' => '/account/numbers',
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
                'index' => [
                    'required' => false,
                    'type' => 'int',
                    'location' => 'json',
                    'minimum' => 1,
                ],
                'size' => [
                    'required' => false,
                    'type' => 'int',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 100,
                ],
                'pattern' => [
                    'required' => false,
                    'type' => 'int',
                    'location' => 'json',
                ],
                'search_pattern' => [
                    'required' => false,
                    'type' => 'int',
                    'location' => 'json',
                    'minimum' => 0,
                    'maximum' => 2,
                ],
            ],
        ],
        'NumberSearch' => [
            // Documentation: https://docs.nexmo.com/index.php/developer-api/number-search
            'httpMethod' => 'POST',
            'uri' => '/number/search',
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
                'country' => [
                    // Options: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 2,
                    'maxLength' => 2,
                ],
                'pattern' => [
                    'required' => false,
                    'type' => 'int',
                    'location' => 'json',
                ],
                'search_pattern' => [
                    'required' => false,
                    'type' => 'int',
                    'location' => 'json',
                    'minimum' => 0,
                    'maximum' => 2,
                ],
                'features' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'index' => [
                    'required' => false,
                    'type' => 'int',
                    'location' => 'json',
                    'minimum' => 1,
                ],
                'size' => [
                    'required' => false,
                    'type' => 'int',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 100,
                ],
            ],
        ],
        'NumberBuy' => [
            // Documentation: https://docs.nexmo.com/index.php/developer-api/number-buy
            'httpMethod' => 'POST',
            'uri' => '/number/buy',
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
                'country' => [
                    // Options: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 2,
                    'maxLength' => 2,
                ],
                'msisdn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'NumberCancel' => [
            // Documentation: https://docs.nexmo.com/index.php/developer-api/number-cancel
            'httpMethod' => 'POST',
            'uri' => '/number/cancel',
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
                'country' => [
                    // Options: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 2,
                    'maxLength' => 2,
                ],
                'msisdn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'NumberUpdate' => [
            // Documentation: https://docs.nexmo.com/index.php/developer-api/number-update
            'httpMethod' => 'POST',
            'uri' => '/number/update',
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
                'country' => [
                    // Options: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 2,
                    'maxLength' => 2,
                ],
                'msisdn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'moHttpUrl' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'moSmppSysType' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'voiceCallbackType' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'voiceCallbackValue' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'voiceStatusCallback' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
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