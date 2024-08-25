<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    // public function handle($request, Closure $next)
    // {
    //     if (!Auth::check()) {
    //         session()->flash('warning', 'You have to log in first to access the dashboard!');
    //         return redirect()->route('login');
    //     }

    //     return $next($request);
    // }
}
