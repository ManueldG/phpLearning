<?php

use App\Models\User;
use App\Mail\TestShipped;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Api\AskController;
use App\Http\Controllers\PageLearnController;
use App\Http\Middleware\Admin;;


Route::get('/', function () {
    /*abort(503); */ // funzione per testare le pagine d'errore
    return view('home');
})->name('home');

Route::get('/policy', function () {
    return to_route('terms.show');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/console', [AskController::class,'action'])->name('console');
        Route::resource('page',PageLearnController::class)->only(['show','index'])->parameters(['page'=>'page']);


});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'admin',
])->group(function () {

        Route::post('/mail/send',[MailController::class,'send'])->name('mail.send');
        Route::get('/mail/form',[MailController::class,'form'])->name('mail.form');
        Route::resource('page',PageLearnController::class)->except(['show','index']);

});

//Route::resource('page',PageLearnController::class)->only(['show','index'])->parameters(['page'=>'page']);
