<?php return [
    'baseUrl' => 'https://rest.nexmo.com',
    'operations' => [
        'Call' => [
            // Documentation: https://docs.nexmo.com/index.php/voice-api/call
            'httpMethod' => 'POST',
            'uri' => '/call/json',
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
                'to' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'from' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'json',
                ],
                'machine_detection' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => ['true','hangup'],
                ],
                'machine_timeout' => [
                    'required' => false,
                    'type' => 'integer',
                    'location' => 'json',
                ],
                'answer_url' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'answer_method' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => ['GET','POST'],
                ],
                'error_url' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'error_method' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => ['GET','POST'],
                ],
                'status_url' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'status_method' => [
                    'required' => false,
                    'type' => 'integer',
                    'location' => 'json',
                    'enum' => ['GET','POST'],
                ],
            ]
        ],
        'TextToSpeech' => [
            // Documentation: https://docs.nexmo.com/index.php/voice-api/text-to-speech
            'httpMethod' => 'POST',
            'uri' => '/tts/json',
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
                'to' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'from' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'json',
                ],
                'text' => [
                    'required' => true,
                    'type' => 'string',
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
                'voice' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => ['male','female'],
                ],
                'repeat' => [
                    'required' => false,
                    'type' => 'integer',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 10,
                ],
                'machine_detection' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'machine_timeout' => [
                    'required' => false,
                    'type' => 'integer',
                    'location' => 'json',
                    'minimum' => 400,
                    'maximum' => 10000,
                ],
                'callback' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'callback_method' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => ['GET','POST'],
                ],
            ]
        ],
        'TextToSpeechPromptCapture' => [
            // Documentation: https://docs.nexmo.com/index.php/voice-api/text-to-speech-prompt
            'httpMethod' => 'POST',
            'uri' => '/tts-prompt/json',
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
                'to' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'from' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'json',
                ],
                'text' => [
                    'required' => true,
                    'type' => 'string',
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
                'voice' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => ['male','female'],
                ],
                'repeat' => [
                    'required' => false,
                    'type' => 'integer',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 10,
                ],
                'machine_detection' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'machine_timeout' => [
                    'required' => false,
                    'type' => 'integer',
                    'location' => 'json',
                    'minimum' => 400,
                    'maximum' => 10000,
                ],
                'callback' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'callback_method' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => ['GET','POST'],
                ],
                'max_digits' => [
                    'required' => true,
                    'type' => 'integer',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 16,
                ],
                'bye_text' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ]
        ],
        'TextToSpeechPromptConfirm' => [
            // Documentation: https://docs.nexmo.com/index.php/voice-api/text-to-speech-prompt
            'httpMethod' => 'POST',
            'uri' => '/tts-prompt/json',
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
                'to' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'text' => [
                    'required' => true,
                    'type' => 'string',
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
                'voice' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => ['male','female'],
                ],
                'callback' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'callback_method' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => ['GET','POST'],
                ],
                'max_digits' => [
                    'required' => true,
                    'type' => 'integer',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 16,
                ],
                'pin_code' => [
                    'required' => true,
                    'type' => 'integer',
                    'location' => 'json',
                ],
                'bye_text' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'failed_text' => [
                    'required' => true,
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