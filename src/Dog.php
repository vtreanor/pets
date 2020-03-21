<?php


namespace Vtreanor\Pets;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dog extends Model {

  public static function getMyDogs($clientId) {
    $dogs = DB::table('dogs')
      ->select('*')
      ->where('clientid', '=', $clientId)
      ->get();
    return $dogs;
  }

  public static function saveImages($userId, $full, $small) {
    DB::table('dogs')
    ->insert([
      'name' => '',
      'breed'   => '',
      'gender'  => '',
      'description' => '',
      'birthdate'   => '1/1/2000',
      'clientid'    => $userId,
      'thumbnail'   => $small,
      'fullsize'    => $full
      ]);
  }

}
