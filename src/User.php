<?php

namespace Vtreanor\Pets;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @method static findOrFail(string $string)
 * @method static create(array $array)
 * @method static find($id)
 */
class User extends Authenticatable {
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'email', 'password', 'address', 'eircode', 'firstname', 'lastname'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function hasRole($role) {
    return ($this->role == $role);
  }

  public function getRole() {
    return $this->role;
  }

  public static function getUsers() {
    $users = User::query()
      ->select('id', 'firstname', 'lastname', 'address', 'eircode', 'email', 'phone', 'role')
      ->orderBy('lastname')
      ->get();
    return $users;
  }
}
