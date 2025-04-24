<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SandboxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(

            __DIR__.'/../../config/sandbox.php', 'sandbox'

        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes([

            __DIR__.'/../../config/sandbox.php' => config_path('sandbox.php'),


        ],'config');
    }
}
