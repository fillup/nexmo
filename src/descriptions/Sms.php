<?php return [
    'baseUrl' => 'https://rest.nexmo.com',
    'operations' => [
        'Send' => [
            'httpMethod' => 'POST',
            'uri' => '/sms/json',
            'responseModel' => 'SendResult',
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
                'from' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'json',
                ],
                'to' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'type' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => [
                        'text','binary','wappush',
                        'unicode','vcal','vcard',
                    ]
                ],
                'text' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'status-report-req' => [
                    'required' => false,
                    'type' => 'integer',
                    'location' => 'json',
                    'maximum' => 1,
                ],
                'client-ref' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'maxLength' => 40,
                ],
                'vcard' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'vcal' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ttl' => [
                    'required' => false,
                    'type' => 'integer',
                    'location' => 'json',
                ],
                'callback' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json'
                ],
                'message-class' => [
                    'required' => false,
                    'type' => 'integer',
                    'location' => 'json',
                ],
                'udh' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'protocol-id' => [
                    'required' => false,
                    'type' => 'integer',
                    'location' => 'json'
                ],
                'body' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'title' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json'
                ],
                'url' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json'
                ],
                'validity' => [
                    'required' => false,
                    'type' => 'integer',
                    'location' => 'json'
                ],
            ]
        ],
        'SearchMessage' => [
            'httpMethod' => 'GET',
            'uri' => '/search/message',
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
                'id' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'query',
                ],
            ]
        ],
        'SearchMessages' => [
            'httpMethod' => 'GET',
            'uri' => '/search/messages',
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
                'ids' => [
                    'required' => false,
                    'type'     => 'array',
                    'location' => 'query',
                ],
                'date' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'query'
                ],
                'to' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'query'
                ],
            ]
        ],
        'SearchRejections' => [
            'httpMethod' => 'GET',
            'uri' => '/search/messages',
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
                'date' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query'
                ],
                'to' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'query'
                ],
            ]
        ],
    ],
    'models' => [
        'SendResult' => [
            'type' => 'object',
            'properties' => [
                'statusCode' => ['location' => 'statusCode']
            ],
            'additionalProperties' => [
                'location' => 'json'
            ]
        ],
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
