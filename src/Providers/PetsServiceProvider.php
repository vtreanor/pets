<?php

namespace Vtreanor\Pets\Providers;

use Illuminate\Support\ServiceProvider;

class PetsServiceProvider extends ServiceProvider{

/*
 * __DIR__ directory is: "/var/www/html/shop/packages/vtreanor/pets/src/Providers"
 */
  public function boot() {
    $this->loadViewsFrom (__DIR__.'/../resources/views', 'pets');
    $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

  }

  public function register() {

  }
}