<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PresterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role->name != "Admin"){
            return redirect()->route('prester.index');
        } else if(Auth::user()->role->name != "Prester"){
            return redirect()->route('admin.index');
        }
        return $next($request);
    }
}
