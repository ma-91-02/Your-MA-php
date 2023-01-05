<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class changeLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('locale')){
            app()->setlocale(session('locale'));
            app()->setlocale(config('app.locale'));
        }
        return $next($request);
    }
}
