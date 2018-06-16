<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table ="actividad";
	protected $fillable =["id","resumen","fecha","tipo","informe","nommbre"];

}
