<?php

namespace Vtreanor\Pets\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PetsServiceProvider extends ServiceProvider{

/*
 * __DIR__ directory is: "/var/www/html/shop/packages/vtreanor/pets/src/Providers"
 */
  public function boot() {
    $this->loadViewsFrom (__DIR__.'/../resources/views', 'pets');
    $this->registerResources();
  }

  private function registerResources() {
    $this->registerRoutes();
  }

  private function registerRoutes() {
    Route::group($this->routeConfiguration(), function(){
      $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    });
  }

  private function routeConfiguration() {
    return [
//      'prefix'    => '',
      'namespace'   => 'Vtreanor\Pets\Http\Controllers',
//      'middleware'  => ''
    ];
  }
  
  public function register() {

  }
}