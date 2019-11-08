<?php

namespace SisCombustible;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  protected $table='users';

  protected $primaryKey='id';

  protected $fillable = [
        'name', 'email', 'password',
    ];
  protected $hidden = [
        'password', 'remember_token',
    ];
}
