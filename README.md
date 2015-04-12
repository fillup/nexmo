# nexmo
PHP client to interact with Nexmo APIs

This library was developed as part of a tutorial, you can go through the tutorial starting at:

[Creating a PHP Nexmo API Client using Guzzle Web Service Client – Part 1](http://www.phillipshipley.com/2015/04/creating-a-php-nexmo-api-client-using-guzzle-web-service-client-part-1/)

This library now covers all RESTful outbound APIs from Nexmo, so whether you're
interested in the tutorial or not you're welcome to use the library for 
integration with Nexmo.

## Install ##
Installation is easy with composer. Just add ```"fillup/nexmo": "dev-master"```
to your composer.json require section and update.

## Usage / Example ##
All classes are in the ```Nexmo\``` namespce:

```php
use Nexmo\Developer;
use Nexmo\Insight;
use Nexmo\Sms;
use Nexmo\Verify;
use Nexmo\Voice;

/**
 * Load config, expecting an array with:
 * api_key, api_secret, to, from, text
 */
$config = include __DIR__.'/../../config-local.php';

/**
 * Get an SMS client object
 */
$sms = new Sms($config);

/**
 * Send a message
 */
$results = $sms->send([
    'from' => $config['from'],
    'to' => $config['to'],
    'text' => $config['text'],
]);

/**
 * Dump out results
 */
print_r($results);
// Array
// (
//    [statusCode] => 200
//    [message-count] => 1
//    [messages] => Array
// (
//    [0] => Array
//    (
//        [to] => 14085559876
//                    [message-id] => 0300000071BCAA3C
//                    [status] => 0
//                    [remaining-balance] => 15.23280000
//                    [message-price] => 0.00480000
//                    [network] => US-VOIP
//                )
// 
//        )
// 
// )
```

All API calls require an ```api_key``` and ```api_secret```. Best practice 
would be to keep this out of your code an in some sort of configuration
file or environment variable that does not go into your source code. Just
pass an array with keys for ```api_key``` and ```api_secret``` to the 
constructor of each class like in the example above.