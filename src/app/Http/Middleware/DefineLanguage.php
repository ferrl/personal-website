<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class DefineLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param $language
     * @return mixed
     */
    public function handle($request, Closure $next, $language)
    {
        config(['app.locale' => $language]);

        return $next($request);
    }
}
