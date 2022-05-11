<?php

namespace App\Providers;

use App\Services\Format\Money\UemoaPriceFormatter;
use App\Services\Format\PriceFormatter;
use Illuminate\Support\ServiceProvider;

class FormatterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PriceFormatter::class, function(){
            return new PriceFormatter(new UemoaPriceFormatter);
        });
    }
}
