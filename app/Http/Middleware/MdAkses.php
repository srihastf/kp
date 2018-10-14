<?php

namespace App\Http\Middleware;

use Closure;

class MdAkses 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roleName)
    {
       if(!$request->user()->hasRole($roleName)){
            $request->session()->flash('alert-info','Maaf anda tidak memiliki hak akses pada laman tersebut.');
            return redirect('/home');
        }
        return $next($request);
    }
}
