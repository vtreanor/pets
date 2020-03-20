<?php

use Illuminate\Support\Facades\Route;

//Route::view('package', 'stuff::blog');

Route::get('package', 'Vtreanor\Pets\Http\Controllers\PetController@index');
