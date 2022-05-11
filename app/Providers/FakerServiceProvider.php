<?php

namespace App\Providers;

use Faker\Provider\Fakecar;
use Faker\{Generator, Factory};
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if (!config('app.debug')) return;
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new Fakecar($faker));
            return $faker;
        });
    }
}
