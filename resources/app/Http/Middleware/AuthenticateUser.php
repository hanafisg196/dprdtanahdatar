<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $accesRole = ['admin','member'];
       $userAccess = Auth::user()->roles->pluck('name')->intersect($accesRole)->isNotEmpty();
       if($userAccess){
        return $next($request);
       } else{
        abort(404);
       }

    }
}
