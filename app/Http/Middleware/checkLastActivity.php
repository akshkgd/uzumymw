<?php

namespace App\Http\Middleware;
use DB;
use Closure;

class checkLastActivity
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
        if (auth()->guest()) {
            return $next($request);
        }
        else
        { 
            DB::table("users")
              ->where("id", auth()->user()->id)
              ->update(["lastActivity" => now()]);
        }
        return $next($request);
    }
}
