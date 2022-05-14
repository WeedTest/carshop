<?php

namespace App\Providers;

use App\Services\Format\PriceFormatter;
use Illuminate\Support\ServiceProvider;
use App\Services\Format\MileageFormatter;
use App\Services\Format\Methods\Money\UemoaPriceMethod;

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
            return new PriceFormatter(new UemoaPriceMethod);
        });
        $this->app->singleton(MileageFormatter::class, function(){
            return new MileageFormatter('km');
        });
    }
}
