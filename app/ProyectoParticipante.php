<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectoParticipante extends Model
{
    protected $table ="proyectoparticipante";
	protected $fillable =["id","proyecto","participante","funciones","fachainicio","fechafin"];
}
