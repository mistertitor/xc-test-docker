<?php die(); ?>
[07:29:46.000000] PaypalCommercePlatform Onboarding AccessToken:Retrieve access token
Runtime id: afa600e0d5700a76dfd6f45337c1ff56
SAPI: apache2handler; IP: 172.31.0.1
URI: /admin.php?target=onboarding_wizard
Method: GET

[07:29:50.000000] array (
  'message' => 'PaypalCommercePlatform Onboarding AccessToken:Access token recieved',
  'data' => 
  array (
    'scope' => 'https://uri.paypal.com/services/customer/partner-referrals/readwrite https://uri.paypal.com/services/payments/realtimepayment https://uri.paypal.com/services/disputes/update-seller https://uri.paypal.com/services/payments/payment/authcapture openid https://uri.paypal.com/services/disputes/read-seller https://uri.paypal.com/services/payments/refund https://uri.paypal.com/services/customer/onboarding/user https://uri.paypal.com/services/risk/raas/transaction-context https://uri.paypal.com/services/partners/merchant-accounts/readwrite https://uri.paypal.com/services/identity/grantdelegation https://api.paypal.com/v1/payments/.* https://uri.paypal.com/services/payments/referenced-payouts-items/readwrite https://uri.paypal.com/services/reporting/search/read https://uri.paypal.com/services/payments/initiatepayment https://uri.paypal.com/services/customer/onboarding/account https://uri.paypal.com/services/customer/partner https://uri.paypal.com/services/customer/onboarding/sessions https://uri.paypal.com/services/customer/merchant-integrations/read https://uri.paypal.com/services/applications/webhooks',
    'access_token' => 'A21AAPGIkgvuxXKge48eRclr5DQaggLD4Cv1aSVEdHgeVWCFEP_YW5DhQStgv6Z91CzXGlOK-sCdaeQ-dGRKZZ9qsIDLmi9Mg',
    'token_type' => 'Bearer',
    'app_id' => 'APP-14G02482RW819934D',
    'expires_in' => 32400,
    'nonce' => '2021-08-18T04:08:24ZHBWASrKQpam_hjx9F4kQHOPY6t6XyewYN1b8JINWmXk',
    'expiration' => 1629292044,
    'partner_id' => '5BPT2FEWWYATY',
  ),
)
Runtime id: afa600e0d5700a76dfd6f45337c1ff56
SAPI: apache2handler; IP: 172.31.0.1
URI: /admin.php?target=onboarding_wizard
Method: GET

[07:29:50.000000] array (
  'message' => 'PaypalCommercePlatform Onboarding:Generate SignUp link',
  'data' => 
  array (
    'operations' => 
    array (
      0 => 
      array (
        'operation' => 'API_INTEGRATION',
        'api_integration_preference' => 
        array (
          'rest_api_integration' => 
          array (
            'integration_method' => 'PAYPAL',
            'integration_type' => 'FIRST_PARTY',
            'first_party_details' => 
            array (
              'features' => 
              array (
                0 => 'PAYMENT',
                1 => 'REFUND',
                2 => 'ACCESS_MERCHANT_INFORMATION',
              ),
              'seller_nonce' => 'd152e3b5e2ccb6ce921639d9057f4cb4ea098dd968b33b324d36bdde8a4648374bb81ac42b3f56030067a9f655bb207f61eab16caaa03f53b51938cbd24079d1',
            ),
          ),
        ),
      ),
    ),
    'products' => 
    array (
      0 => 'PPCP',
    ),
    'legal_consents' => 
    array (
      0 => 
      array (
        'type' => 'SHARE_DATA_CONSENT',
        'granted' => true,
      ),
    ),
    'partner_config_override' => 
    array (
      'return_url' => 'http://localhost:8080/admin.php?target=paypal_commerce_platform_settings&action=onboarding_return&return=onboarding_wizard',
    ),
  ),
)
Runtime id: afa600e0d5700a76dfd6f45337c1ff56
SAPI: apache2handler; IP: 172.31.0.1
URI: /admin.php?target=onboarding_wizard
Method: GET

[07:29:50.000000] array (
  'message' => 'PaypalCommercePlatform Onboarding:Generate SignUp link error',
  'data' => 
  stdClass::__set_state(array(
     '__CLASS__' => 'PEAR2\\HTTP\\Request\\Response',
     'code' => 400,
     'headers' => 
    stdClass::__set_state(array(
       '__CLASS__' => 'PEAR2\\HTTP\\Request\\Headers',
       'iterationStyle' => 'lowerCase',
       'fields:protected' => 'Array(13)',
       'camelCase:protected' => NULL,
       'lowerCase:protected' => NULL,
    )),
     'cookies' => 
    array (
    ),
     'body' => '{"name":"INVALID_REQUEST","message":"Request is not well-formed, syntactically incorrect, or violates schema.","debug_id":"b0d3156b7b1ce","information_link":"","details":[{"issue":"INVALID_PARAMETER_SYNTAX","description":"The value of a field does not conform to the expected format.","field":"/partner_config_override/return_url","location":"body"}],"links":[]}',
     'scheme' => 'https',
     'host' => 'api.paypal.com',
     'path' => '/v2/customer/partner-referrals',
     'uri' => 'https://api.paypal.com/v2/customer/partner-referrals',
     'port' => 443,
  )),
)
Runtime id: afa600e0d5700a76dfd6f45337c1ff56
SAPI: apache2handler; IP: 172.31.0.1
URI: /admin.php?target=onboarding_wizard
Method: GET

[07:31:11.000000] array (
  'message' => 'PaypalCommercePlatform Onboarding:Generate SignUp link',
  'data' => 
  array (
    'operations' => 
    array (
      0 => 
      array (
        'operation' => 'API_INTEGRATION',
        'api_integration_preference' => 
        array (
          'rest_api_integration' => 
          array (
            'integration_method' => 'PAYPAL',
            'integration_type' => 'FIRST_PARTY',
            'first_party_details' => 
            array (
              'features' => 
              array (
                0 => 'PAYMENT',
                1 => 'REFUND',
                2 => 'ACCESS_MERCHANT_INFORMATION',
              ),
              'seller_nonce' => 'd152e3b5e2ccb6ce921639d9057f4cb4ea098dd968b33b324d36bdde8a4648374bb81ac42b3f56030067a9f655bb207f61eab16caaa03f53b51938cbd24079d1',
            ),
          ),
        ),
      ),
    ),
    'products' => 
    array (
      0 => 'PPCP',
    ),
    'legal_consents' => 
    array (
      0 => 
      array (
        'type' => 'SHARE_DATA_CONSENT',
        'granted' => true,
      ),
    ),
    'partner_config_override' => 
    array (
      'return_url' => 'http://localhost:8080/admin.php?target=paypal_commerce_platform_settings&action=onboarding_return&return=onboarding_wizard',
    ),
  ),
)
Runtime id: bef610ec488bea4e9c39efed682d48dd
SAPI: apache2handler; IP: 172.31.0.1
URI: /admin.php?target=onboarding_wizard
Method: GET

[07:31:11.000000] array (
  'message' => 'PaypalCommercePlatform Onboarding:Generate SignUp link error',
  'data' => 
  stdClass::__set_state(array(
     '__CLASS__' => 'PEAR2\\HTTP\\Request\\Response',
     'code' => 400,
     'headers' => 
    stdClass::__set_state(array(
       '__CLASS__' => 'PEAR2\\HTTP\\Request\\Headers',
       'iterationStyle' => 'lowerCase',
       'fields:protected' => 'Array(12)',
       'camelCase:protected' => NULL,
       'lowerCase:protected' => NULL,
    )),
     'cookies' => 
    array (
    ),
     'body' => '{"name":"INVALID_REQUEST","message":"Request is not well-formed, syntactically incorrect, or violates schema.","debug_id":"bb5a79a800128","information_link":"","details":[{"issue":"INVALID_PARAMETER_SYNTAX","description":"The value of a field does not conform to the expected format.","field":"/partner_config_override/return_url","location":"body"}],"links":[]}',
     'scheme' => 'https',
     'host' => 'api.paypal.com',
     'path' => '/v2/customer/partner-referrals',
     'uri' => 'https://api.paypal.com/v2/customer/partner-referrals',
     'port' => 443,
  )),
)
Runtime id: bef610ec488bea4e9c39efed682d48dd
SAPI: apache2handler; IP: 172.31.0.1
URI: /admin.php?target=onboarding_wizard
Method: GET

[07:47:21.000000] array (
  'message' => 'PaypalCommercePlatform Onboarding:Generate SignUp link',
  'data' => 
  array (
    'operations' => 
    array (
      0 => 
      array (
        'operation' => 'API_INTEGRATION',
        'api_integration_preference' => 
        array (
          'rest_api_integration' => 
          array (
            'integration_method' => 'PAYPAL',
            'integration_type' => 'FIRST_PARTY',
            'first_party_details' => 
            array (
              'features' => 
              array (
                0 => 'PAYMENT',
                1 => 'REFUND',
                2 => 'ACCESS_MERCHANT_INFORMATION',
              ),
              'seller_nonce' => 'd152e3b5e2ccb6ce921639d9057f4cb4ea098dd968b33b324d36bdde8a4648374bb81ac42b3f56030067a9f655bb207f61eab16caaa03f53b51938cbd24079d1',
            ),
          ),
        ),
      ),
    ),
    'products' => 
    array (
      0 => 'PPCP',
    ),
    'legal_consents' => 
    array (
      0 => 
      array (
        'type' => 'SHARE_DATA_CONSENT',
        'granted' => true,
      ),
    ),
    'partner_config_override' => 
    array (
      'return_url' => 'http://localhost:8080/admin.php?target=paypal_commerce_platform_settings&action=onboarding_return&return=onboarding_wizard',
    ),
  ),
)
Runtime id: 41362f2d14320824cdf7de50168b1fdd
SAPI: apache2handler; IP: 192.168.0.1
URI: /admin.php?target=onboarding_wizard
Method: GET

[07:47:25.000000] array (
  'message' => 'PaypalCommercePlatform Onboarding:Generate SignUp link error',
  'data' => 
  stdClass::__set_state(array(
     '__CLASS__' => 'PEAR2\\HTTP\\Request\\Response',
     'code' => 400,
     'headers' => 
    stdClass::__set_state(array(
       '__CLASS__' => 'PEAR2\\HTTP\\Request\\Headers',
       'iterationStyle' => 'lowerCase',
       'fields:protected' => 'Array(13)',
       'camelCase:protected' => NULL,
       'lowerCase:protected' => NULL,
    )),
     'cookies' => 
    array (
    ),
     'body' => '{"name":"INVALID_REQUEST","message":"Request is not well-formed, syntactically incorrect, or violates schema.","debug_id":"52db09e7eb64c","information_link":"","details":[{"issue":"INVALID_PARAMETER_SYNTAX","description":"The value of a field does not conform to the expected format.","field":"/partner_config_override/return_url","location":"body"}],"links":[]}',
     'scheme' => 'https',
     'host' => 'api.paypal.com',
     'path' => '/v2/customer/partner-referrals',
     'uri' => 'https://api.paypal.com/v2/customer/partner-referrals',
     'port' => 443,
  )),
)
Runtime id: 41362f2d14320824cdf7de50168b1fdd
SAPI: apache2handler; IP: 192.168.0.1
URI: /admin.php?target=onboarding_wizard
Method: GET

