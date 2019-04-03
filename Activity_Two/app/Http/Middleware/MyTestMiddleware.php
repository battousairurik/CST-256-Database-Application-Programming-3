<?php

namespace App\Http\Middleware;

use Closure;

class MyTestMiddleware
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
        //system.out.println("Statement inside MyTestMiddleware handle()");
        Log:info("inside the test middleware");
        return $next($request);
    }
    
    
}
