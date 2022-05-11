<?php

namespace App\Http\Actions;

use App\Models\Car;
use Illuminate\Pipeline\Pipeline;

class ListingCarsAction
{
    public function __invoke(Pipeline $pipeline)
    {
        $cars = $pipeline->send(Car::query())
            ->through([
                \App\Filters\Active::class,
            ])
            ->thenReturn();
    }
}
