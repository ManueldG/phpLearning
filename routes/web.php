<?php

use App\Models\User;
use App\Mail\TestShipped;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use App\Http\Controllers\Api\AskController;
use App\Http\Controllers\PageLearnController;

Route::get('/', function () {
    /*abort(503); */ // funzione per testare le pagine d'errore
    return view('home');
})->name('home');

Route::get('/policy', function () {
    return to_route('terms.show');
});

Route::get('/mail',function(Request $request){

    $title = $request->input('title');
    $msg = $request->input('message');
    $to = $request->input('to');

    if(true){
        $ship = new TestShipped();
        $ship->setMessage($msg);
        $ship->setSubject($title);
        Mail::to($to)->send($ship);
    };

    return view('components.mail',[
        'msg' => "test"
    ]);
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
