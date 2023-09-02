<?php


namespace App\Filters;

use Closure;

class BedroomFilter
{
    public function handle($request, Closure $next)
    {
        if (! request()->has('bedrooms')) {
            return $next($request);
        }

        return $next($request)->where('Bedrooms', request()->input('bedrooms'));
    }
}
