<?php

namespace App\Http\Middleware;

use Closure;

class CheckAllowParameter
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

        $response=$next($request);
        $response->header('mycust','54646');
        return  $response;
    }
}
