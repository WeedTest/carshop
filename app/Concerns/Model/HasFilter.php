<?php

namespace App\Concerns\Model;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

trait HasFilter
{
    public function scopeFilter(Builder $builder, Request $request)
    {
        return $this->resolveBucket($request)
            ->filter($builder);
    }

    private function resolveBucket(Request $request)
    {
        $class = 'App\\Services\\Filter\\Buckets\\' . basename(static::class) . 'Bucket';
        return new $class($request);
    }
}
