<?php

namespace App\Http\Actions;

use App\Models\Car;

class ListingCarsAction
{
    public function __invoke()
    {
        return view('cars', [
            'cars' => Car::paginate()
        ]);
    }
}
