<?php

namespace App\Http\Middleware;

use Closure;

class Checkifisvip
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
        if(!$request->user()->isvip){
            return redirect(route('isvip_notice'));
        }
        return $next($request);
    }
}
