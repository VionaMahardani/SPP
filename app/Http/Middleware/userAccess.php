<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class userAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next, $level)
    // {
    //     // Check & verify with route, you will more understand
    //     if(Auth::check() && Auth::user()->level == $level)
    //     {
    //         return $next($request);
    //     }
        
    //     // return back();
    //     return response()->view('auth.login');
    // }
    public function handle(Request $request, Closure $next, ...$level)
    {
        // Check & verify with route, you will more understand
        if(in_array($request->user()->level,$level))
        {
            return $next($request);
        }
        
        // return back();
        return response()->view('auth.login');
    }
}
