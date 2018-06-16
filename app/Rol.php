<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table ="rol";
	protected $fillable =["id","descripcion","semillero"];
}
