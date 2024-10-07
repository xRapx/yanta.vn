<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next){
        $user = Auth::user();
        if(!$user){
            return redirect()->route('login');
        }
        if($user && $user->role==='admin' && $user->status){
            return $next($request);    
        }
        return redirect()->route('login');
    }
}
