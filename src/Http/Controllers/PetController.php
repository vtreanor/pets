<?php

namespace Vtreanor\Pets\Http\Controllers;

use App\Http\Controllers\Controller;
use Vtreanor\Pets\Dog;
use Vtreanor\Pets\Vaccination;
use Vtreanor\Pets\Vet;
use Vtreanor\Pets\User;

class PetController extends Controller{
  public function index() {
    $dogs         = Dog::getMyDogs(12);
    $users        = User::all();
    $vets         = Vet::all();
    $vaccinations = Vaccination::all();

    return view('pets::blog',[
      'dogs'          => $dogs,
      'users'         => $users,
      'vets'          => $vets,
      'vaccinations'  => $vaccinations
    ]);
  }
}