<?php

namespace Hkaghazi\Gateway;

use Symfony\Component\HttpKernel\Exception\HttpException;

include_once(__DIR__ . '/../functions/sadad.php');

class Pay
{
  private $gateways = [];

  function __construct()
  {
    $this->gateways = config('gateway.drivers');
  }

  public function avaliableGateways()
  {
    $activeGateways = array_filter($this->gateways, function ($gateway) {
      return $gateway['enable'] ==  true;
    }, true);

    $activeGatewaysMaped = [];
    foreach ($activeGateways as $key => $value) {
      array_push($activeGatewaysMaped, $key);
    }

    return $activeGatewaysMaped;
  }

  public function payBySadad($gateway, $amount, $orderId)
  {

    $localDateTime = date("m/d/Y g:i:s a");
    $backurl = env('APP_URL') . 'verify-payment';

    $this->gateWayIsAvaliable('sadad');

    dd($this->gateways);
  }

  public function payByMellat($gateway, $amount, $orderId)
  {

    $localDateTime = date("m/d/Y g:i:s a");
    $backurl = env('APP_URL') . 'verify-payment';

    $this->gateWayIsAvaliable('mellat');

    dd($this->gateways);
  }


  public function payByParsian($gateway, $amount, $orderId)
  {

    $localDateTime = date("m/d/Y g:i:s a");
    $backurl = env('APP_URL') . 'verify-payment';

    $this->gateWayIsAvaliable('parsian');

    dd($this->gateways);
  }



  private function gateWayIsAvaliable($gatewayName)
  {
    $isAvaliable = $this->gateways[$gatewayName]['enable'];

    if (!$isAvaliable) {
      abort(500, 'Gateway currently unavialbe!');
    }
  }
}
