<?php


namespace App\Filters;

use Closure;

class NameFilter
{
    public function handle($request, Closure $next)
    {
        if (! request()->has('name')) {
            return $next($request);
        }

        return $next($request)->where('Name', 'like', '%'.request()->input('active').'%');
    }
}
