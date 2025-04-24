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
        Route::model('page', PageLearn::class);
        View::addNamespace('email', base_path('resources/views/emails'));
        View::addNamespace('mail', base_path('resources/views/vendor/mail/html'));




    }
}
