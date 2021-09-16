<?php

use Illuminate\Http\Request;

class GateWayError
{
  public function error(Request $request)
  {
    $message = '';
    if ($request->filled('message')){
      $message;
    }

    abort(400, $message);
  }
}
