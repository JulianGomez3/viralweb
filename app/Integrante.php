<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrante extends Model
{
    protected $table ="integrante";
	protected $fillable =['id','finicio','ffin','participante','estado','rol'];
	public $timestamps = false;
}
