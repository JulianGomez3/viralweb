<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfAuthenticatedNoUser
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
        if(!$usuario){
                return $next($request);
        }
        return redirect('/');
    }
}
