<?php

namespace Hkaghazi\Gateway;

use Illuminate\Support\ServiceProvider;

class GateWayServiceProvider extends ServiceProvider
{

  public function register()
  {
    // merge config file from user settings

    $this->mergeConfigFrom(
      __DIR__ . '/../config/gateway.php',
      'gateway'
    );
  }

  public function boot()
  {
    // publish config file in config folder
    $this->publishes([
      __DIR__ . '/../config/gateway.php' => config_path('gateway.php'),
    ]);

    // default payment routes
    $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    $this->loadViewsFrom(__DIR__.'/../resources/views', 'gateway');
  }
}
