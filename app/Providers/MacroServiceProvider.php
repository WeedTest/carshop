<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider
{

    private array $macroables = [
        \Illuminate\Database\Schema\Blueprint::class => [
            \App\Mixins\Blueprint::class,
        ]
    ];
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->process();
    }

    private function process()
    {
        foreach ($this->macroables as $macroable => $mixins) {
            foreach ($mixins as $mixin) {
                call_user_func([$macroable, 'mixin'], new $mixin);
            }
        }
    }
}
