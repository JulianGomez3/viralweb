<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semillero;
class SemmilleroControlle extends Controller
{
    protected funtion listar(){
    	return Semillero::get();
    	
    }
}
