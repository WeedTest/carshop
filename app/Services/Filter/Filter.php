<?php

namespace App\Services\Filter;

use Illuminate\Http\Request;
use App\Contracts\MakeContract;
use Illuminate\Database\Eloquent\Builder;

abstract class Filter implements MakeContract
{
    protected array $filters = [];
    protected array $layers = [];

    public function __construct(private Request $request)
    {
        dump(static::class. ' instantiated');
    }

    public static function make($request): self
    {
        return new static($request);
    }

    public function filter(Builder $builder)
    {
        foreach ($this->layers = $this->getFilters() as $filter => $value) {
            $this->resolveFilter($filter)->filter($builder, $value);
        }

        return new FilterFactory($this,$builder);
    }


    protected function getFilters()
    {
        return array_filter($this->request->only(array_keys($this->filters)));
    }

    protected function resolveFilter($filter)
    {
        return new $this->filters[$filter];
    }
}
