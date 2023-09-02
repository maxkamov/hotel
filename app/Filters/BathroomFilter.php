<?php


namespace App\Filters;

use Closure;

class BathroomFilter
{
    public function handle($request, Closure $next)
    {
        if (! request()->has('bathroom')) {
            return $next($request);
        }

        return $next($request)->where('Bathroom', request()->input('bathroom'));
    }
}
