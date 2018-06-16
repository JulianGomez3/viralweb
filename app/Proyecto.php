<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table ="proyecto";
	protected $fillable =["id","resumen","fachainicio","fechafin","categoria","semillero","nombre","codigo","estado","informacion"];
}
