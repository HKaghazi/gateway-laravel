<?php

namespace Hkaghazi\Gateway;

use Illuminate\Support\Facades\Facade;

class GateWayFacade extends Facade {

  protected static function getFacadeAccessor()
  {
    return 'Gateway';
  }

}