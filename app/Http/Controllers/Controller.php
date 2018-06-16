<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getLogin(){
        return view('login');
    }

    protected function getPerfil(){
        return view('Perfil');
    }

    protected function getInicio(){
    	return view('inicio');
    }

    protected function getMiembros(){
    	return view('miembros');
    }

    protected function getHistoria(){
    	return view('historia');
    }

    protected function getAdministrar(){
        return view('admin');
    }



    
}
