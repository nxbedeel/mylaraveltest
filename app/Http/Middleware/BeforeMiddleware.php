<?php

namespace App\Http\Middleware;

use Closure;

class BeforeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   public function handle($request, Closure $next,$display)
    {
       echo $request->name; die;
        // Perform action
      if ($display != 'true') {
            return redirect('/');
        }

        return $next($request);

    }
}
