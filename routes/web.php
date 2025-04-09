<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AskController;
use App\Http\Controllers\PageLearnController;

Route::get('/', function () {
    return view('home');
})->name('home');



Route::get('/policy', function () {
    return to_route('terms.show');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/console', [AskController::class,'action'])->name('console');

    Route::resource('page',PageLearnController::class)->except(['show','index']);
});

Route::resource('page',PageLearnController::class)->only(['show','index'])->parameters(['page'=>'page']);






