<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, $permission): Response
    {

        if (!auth()->user() || !auth()->user()->hasPermission($permission)) {
            abort(403, 'Unauthorized');
        }
        return $next($request);
    }
}
