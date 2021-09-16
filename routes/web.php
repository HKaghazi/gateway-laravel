<?php


use Hkaghazi\Gateway\Pay;
use Hkaghazi\Gateway\GateWayError;
use Illuminate\Support\Facades\Route;


Route::get('/verify-payment', [Pay::class, 'verify']);
Route::post('/gateway-error', function () {
  return view('gateway::error');
})->name('gateway.error');
