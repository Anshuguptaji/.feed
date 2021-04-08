<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CekLogin
{
    public function handle($request, Closure $next)
    {
        if(Session::has('user')){
            return $next($request);
		}else{
			return redirect('/login')->with('error', 'Anda Harus Login Terlebih Dahulu');
		}
    }
}