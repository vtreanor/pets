<?php

namespace Vtreanor\Pets\Http\Controllers;

use App\Http\Controllers\Controller;

class PetController extends Controller{
  public function index() {
    return view('stuff::blog');
  }
}