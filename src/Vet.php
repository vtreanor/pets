<?php

namespace Vtreanor\Pets;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @method static find(int $id)
 */
class Vet extends Model {

  public static function getVets() {
    $vets = Vet::query()
      ->select('*')
      ->orderBy('name')
      ->get();
    return $vets;
  }

  public function updateVet(Request $request, $id){
    $rowsAffected = DB::table('vets')
      ->where('id', $id)
      ->update([
        'name' => $request->name,
        'practice' => $request->practice ?? "",
        'phone' => $request->phone ?? "",
        'email' => $request->email ?? "",
        'address' => $request->address ?? "",
        'eircode' => $request->eircode ?? "",
        'note' => $request->note ?? ""
      ]);
    return $rowsAffected;
  }


}
