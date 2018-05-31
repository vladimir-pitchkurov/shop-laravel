<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddleware
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
        /*echo intval($request->route('id'));die;*/
        /*echo $request->route('id');
        echo gettype($request->route('id'));
        echo gettype(intval($request->route('id')));die;*/
        if(intval($request->route('id')) > 200){
            return redirect()->route('homepage');
        }

        return $next($request);
    }
}
