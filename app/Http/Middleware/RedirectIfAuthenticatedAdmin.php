<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfAuthenticatedAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $usuario =$request->user();
        if($usuario){
            if($usuario->tipo=='2'){
                return $next($request);
            }else{
                return redirect('/Perfil'); //cambiar ruta
            }
        }
        return redirect('/Login');
    }
}
