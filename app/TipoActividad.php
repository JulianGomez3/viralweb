<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoActividad extends Model
{
    protected $table ="tipoactividad";
	protected $fillable =["id","descripcion","semillero"];
}
