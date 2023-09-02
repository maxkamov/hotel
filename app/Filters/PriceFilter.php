<?php


namespace App\Filters;

use Closure;

class PriceFilter
{
    public function handle($request, Closure $next)
    {
        if (!request()->has('price_from') && !request()->has('price_to')) {
            return $next($request);
        }

        $price_from = request()->has('price_from') ? request()->input('price_from') : 0;
        $price_to = request()->has('price_to') ? request()->input('price_to') : 1000000;

        return $next($request)->whereBetween('Price', [$price_from, $price_to]);
    }
}
