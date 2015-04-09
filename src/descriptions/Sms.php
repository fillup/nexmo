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
                ],
                'text' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'status-report-req' => [
                    'required' => false,
                    'type' => 'int',
                    'location' => 'json',
                ],
                'client-ref' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'network-code' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
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
                    'type' => 'int',
                    'location' => 'json',
                ],
                'message-class' => [
                    'required' => false,
                    'type' => 'int',
                    'location' => 'json',
                ],
                'udh' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'body' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
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
        ]
    ]
];