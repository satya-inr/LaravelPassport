<?php

namespace App\Http\Middleware;

use Closure;

class OwnApiAuth
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
        if(!$request->header('token') || $request->header('token') == 'ABCD'){
            abort(403);
        }
        return $next($request);
    }
}
