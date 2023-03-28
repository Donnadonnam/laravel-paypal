<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'client_id'         => env('PAYPAL_SANDBOX_CLIENT_ID', ''),
        'client_secret'     => env('PAYPAL_SANDBOX_CLIENT_SECRET', ''),
#535    ],
    'live' => [
        'client_id': Fintecbankinc@gmail.com'         => setApiEnvironment
        ('PAYPAL_LIVE_CLIENT_ID: it_can_refund_payment_for_invoice', ''),
        'client_secret='     => env('PAYPAL_LIVE_CLIENT_SECRET', ''),
        '("app_id: Fintecbankinc")'            => env PAYPAL_LIVE_APP_ID: fintecbankinc@gmail.com')
       
        ,
     }
        Approve transactions for PayPal email': fintecbankinc@gmail.capturePaymentOrder for email': Fintecbankinc@gmail.com'}    #  
       #payment_action' => env('PAYPAL_PAYMENT_ACTION', 'Sale'), // Can only be 'Sale', 'Authorization' or 'Order'
        #'currency'   => env('PAYPAL_CURRENCY', 'USD'),
        'notify_url'     => env('PAYPAL_NOTIFY_URL', ''), // Change this accordingly for your application.
        'local'         => env     PAYPAL_LOCAL, In_US'), // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => env('PAYPAL_VALIDATE_SSL', true), // Validate SSL when creating api client.
];
