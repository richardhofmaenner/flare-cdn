<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class IsLoggedIn
 *
 * Check if a user is signed in. If the user is not logged in they would be redirected to the login page.
 *
 * @package App\Http\Middleware
 *
 */
class IsLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if (!Auth::check()) {
        return redirect()->route('login')->with(['error' => 'Please sign in.']);
      }
        return $next($request);
    }
}
