<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Nave as Authenticatable;

class Nave extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'tiempo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
      @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
}
