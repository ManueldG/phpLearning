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
        // $this->mergeConfigFrom( __DIR__.'/../../config/sandbox.php', 'sandbox' ); // se c'è un'altra configurazione in vendor per esempio l'unisce
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //pubblica il file che si trova in __DIR__.'/../../stubs/sandbox.php' in config/sandbox.php usando php artisan vendor:publish
        $this->publishes([

            __DIR__.'/../../stubs/sandbox.php' => config_path('sandbox.php'),


        ],'config');
    }
}
