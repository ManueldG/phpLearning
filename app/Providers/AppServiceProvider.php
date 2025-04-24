<?php

namespace App\Providers;

use App\Models\PageLearn;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::model('page', PageLearn::class); // invece di usare PageLearn nella rotta usa  /page/{page}
        View::addNamespace('email', base_path('resources/views/emails')); // serve per usare i componennti <x-email::index /> che si trovano fuori view/components
        View::addNamespace('mail', base_path('resources/views/vendor/mail/html'));




    }
}
