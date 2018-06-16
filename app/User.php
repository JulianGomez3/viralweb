<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
     protected $table ="participante";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable =['id','documento','nombre','fchanacimmiento','email','codigo','foto','tipo','telefono','facebook','twitter'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
