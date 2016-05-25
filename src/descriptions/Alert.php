<?php
return [
    'baseUrl' => 'https://rest.nexmo.com',
    'operations' => [
        'Send' => [
            'httpMethod' => 'POST',
            'uri' => '/sc/us/alert/json',
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
                'to' => [
                    'required' => true,
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
                'template' => [
                    'required' => false,
                    'type' => 'integer',
                    'location' => 'json',
                    'maximum' => 6,
                ],
                'type' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => [
                        'text', 'unicode'
                    ]
                ]
            ],
            'additionalParameters' => [
                'required' => false,
                'type' => 'string',
                'location' => 'json',
            ]
        ]
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