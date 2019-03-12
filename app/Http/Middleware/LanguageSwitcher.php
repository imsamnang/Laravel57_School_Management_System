<?php

namespace App\Http\Middleware;

use Closure;

class LanguageSwitcher
{

    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
