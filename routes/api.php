<?php

use App\Http\Controllers\Api\AskController;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// curl -X GET http://127.0.0.1:8000/api/ask -H "Content-Type: application/json; charset=utf-8" -H "Authorization: Bearer <token></token>" -d "{\"code\":\" echo%20substr(%22abcdef%22%2C0%2C-1)%3B  \"}" # comando URLencode
Route::post('ask',[AskController::class,'index'])->middleware('auth:sanctum');

