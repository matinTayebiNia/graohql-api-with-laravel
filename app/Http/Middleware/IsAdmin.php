<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Laravel\Passport\Passport;

class IsAdmin
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
        if ($request->user('api')->isSuperuser() || $request->user('api')->isStaff()) {
            return $next($request);
        }
        return false;

    }
}
