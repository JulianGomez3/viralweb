<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semillero extends Model
{
    protected $table ="semillero";
	protected $fillable =["id","nombre","slogan","logo","descripcion","fechacreacion","vision","mision","objetivos","director","email","facebook","web","twitter","tematicas","justificacion","actividades","objetivosespecificos","metodologia","antecedentes","grupo","estado"];

	
}
