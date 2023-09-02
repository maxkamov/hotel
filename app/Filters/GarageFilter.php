<?php


namespace App\Filters;

use Closure;

class GarageFilter
{
    public function handle($request, Closure $next)
    {
        if (! request()->has('garages')) {
            return $next($request);
        }

        return $next($request)->where('Garages', request()->input('garages'));
    }
}
