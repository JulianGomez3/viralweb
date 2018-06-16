<?php

namespace App\Http\Controllers;

use App\Participante;
use App\integrante;

use Illuminate\Http\Request;


class MiembroController extends Controller
{
   public function store(Request $request){
   		\App\Participante::create([
   			
   			'documento' => $request['documento'],
   			'nombres' => $request['nombres'],
   			'fchanacimmiento' => $request['fecha'],
   			'email' => $request['email'],
   			'codigo' => $request['codigo'],
   			'clave' => bcrypt($request['pass']),
   			'telefono' => $request['telefono'],
   			'facebook' => $request['fb'],
   			'twitter'=> $request['twitter'],
   		]);

   }



   private function registrar($request){
        $participante = new Participante();
        $participante->codigo=$request->input('codigo');
        $participante->nombre=$request->input('nombres');
        $participante->documento=$request->input('documento');
        $participante->email=$request->input('email');
        //$participante->rol=$request->input('rol');
        $participante->fechanacimiento=$request->input('fecha');
        $participante->password=bcrypt($request->input('pass'));
        $participante->tipo=$request->input('tipo');
        $participante->telefono=$request->input('telefono');
        $participante->facebook=$request->input('fb');
        $participante->twitter=$request->input('twitter');
        
        return $participante;
    }
    public function registrarParticipante(Request $request){
       /*$validated = Validator::make($request->all(),[
            'documento'=>'required|string',
            'nombres'=>'required|string',
            'codigo'=>'required|string',
            'email'=>'required|email',
            'descripcion'=>'required',
            'pass' => 'required|max:10',
        ]);
        if ($validated->fails()) {
            return redirect('/Administrador')
                        ->withErrors($validated)
                        ->withInput();
        }}*/
        $participante = $this->registrar($request);
        $mensaje='Registro fallido';
        
        if($participante->save()){
            $integrante = new Integrante();
            $integrante->id= $participante->id;
            $integrante->rol=$request->input('rol');
            
            if($integrante->save()){
                $mensaje='registro exitoso';
            }
        }
        return redirect('/Administrador')->with('status', $mensaje);
    }

}
