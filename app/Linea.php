<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    protected $table ="linea";
	protected $fillable =["id","semillero","descripcion","objetivos"];
}
