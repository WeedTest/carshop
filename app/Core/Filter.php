<?php

namespace App\Core;

use Illuminate\Database\Eloquent\Builder;

Abstract class Filter
{
    public function handle(Builder $query, \Closure $next)
    {
        dd($query);
    }
}
