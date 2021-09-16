<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Gateway drivers
  |--------------------------------------------------------------------------
  | list of avalible gateways
  |
  */

  'drivers' => [
    // Sadad payment gateway 
    // https://sadadpsp.ir/
    'sadad' => [
      'enable' => true,
      'key' => 'YourKeyId',
      'marchantId' => 'YourMarchantId',
      'terminalId' => 'YourTerminalID',
      'returnUrl' => env('APP_URL') . 'peyment/verify'
    ],

    // Mellat payment gateway (bpm)
    // https:‎//bpm.shaparak.ir
    'mellat' => [
      'enable' => false,
      'key' => 'YourKeyId',
      'marchantId' => 'YourMarchantId',
      'terminalId' => 'YourTerminalID',
      'returnUrl' => env('APP_URL') . 'peyment/verify'
    ],

    // Parsian payment gateway
    // https:‎//pec.shaparak.ir
    'parsian' => [
      'enable' => false,
      'key' => 'YourKeyId',
      'marchantId' => 'YourMarchantId',
      'terminalId' => 'YourTerminalID',
      'returnUrl' => env('APP_URL') . 'peyment/verify'
    ],
  ]

];
