<?php

namespace App\Http\Middleware;

use Closure;
use http\Env\Response;
use Illuminate\Http\Request;

class MustBeAdministrator
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
    //  abort_if(auth->user()?->username !== 'JeffreyWay', Response::HTTP_FORBIDDEN);
       abort_if(! Auth::user()->isAdmin(), 403);



        return $next($request);
    }
}
