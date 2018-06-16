<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $table ="participante";
	protected $fillable =['id','documento','nombre','fchanacimmiento','email','codigo','password','foto','tipo','telefono','facebook','twitter','remember_token'];
	public $timestamps = false;
}
