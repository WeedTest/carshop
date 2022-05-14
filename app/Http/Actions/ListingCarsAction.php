<?php

namespace App\Http\Actions;

use App\Models\Car;
use App\Services\Filter\Buckets\CarBucket;
use Illuminate\Http\Request;

class ListingCarsAction
{
    public function __invoke(Request $request)
    {
        $resp = Car::filter($request);
        $cars = $resp->query->simplePaginate()
            ->withQueryString();

            dump($resp->filter);

        return view('cars', [
            'cars' => $cars
        ]);
    }
}
