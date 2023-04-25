<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if(Session::get("lang") !=null){
            App:setlocale(Session::get("lang"));
        }else{
            Session::put('lang',"uz");
        }
        return $next($request);
    }
}
