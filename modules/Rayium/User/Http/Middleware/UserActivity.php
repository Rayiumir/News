<?php

namespace modules\Rayium\User\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use modules\Rayium\User\Models\User;
use Symfony\Component\HttpFoundation\Response;

class UserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            User::where( 'id', Auth::user()->id )->update( [ 'last_seen' => now() ] );
        }
        return $next($request);
    }
}
