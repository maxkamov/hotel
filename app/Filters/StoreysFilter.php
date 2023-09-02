<?php


namespace App\Filters;

use Closure;

class StoreysFilter
{
    public function handle($request, Closure $next)
    {
        if (! request()->has('storeys')) {
            return $next($request);
        }

        return $next($request)->where('Storeys', request()->input('storeys'));
    }
}
